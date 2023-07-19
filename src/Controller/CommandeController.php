<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\Detail;
use App\Repository\PlatRepository;
use App\Repository\UtilisateurRepository;
use App\Service\MailService;
use App\Service\PanierService;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommandeController extends AbstractController
{
    private $panier;
    private $utilisateurRepository;
    private $platRepository;

    public function __construct(PanierService $panierService, UtilisateurRepository $utilisateurRepository, PlatRepository $platRepository)
    {
        $this->panier = $panierService;
        $this->utilisateurRepository = $utilisateurRepository;
        $this->platRepository = $platRepository;
    }

    #[Route('/commande', name: 'app_commande')]
    public function index(EntityManagerInterface $entityManager, MailService $ms): Response
    {
        $panier = $this->panier->getPanier();
        if ($panier != NULL) {
            $total = $this->panier->getTotalPrix();
            $qtt = $this->panier->getTotalQuantity();
        } else {
            $total = 0;
            $qtt = "";   
            $this->addFlash('error', 'Erreur d\'utilisateur - Panier vide');
            return $this->redirectToRoute('app_accueil');
        }

        $this->denyAccessUnlessGranted('ROLE_CLIENT');

        $user = $this->getUser();

        $identifiant = $this->getUser()->getUserIdentifier();
        if ($identifiant) {
            $info = $this->utilisateurRepository->findOneBy(["email" => $identifiant]);
        } else {
            $this->addFlash('error', 'Erreur utilisateur: Veuillez vous reconnecter');
            return $this->redirectToRoute('app_accueil');
        }

        //Info utilisateurs

        $adresse_client = $info->getAdresse() . " " . $info->getCp() . " " . $info->getVille();
        $nom_client = $info->getPrenom() . " " . $info->getNom();
        $mail_client = $info->getEmail();

        //Entrée base de données        

        //Entrée de la commande

        $commande = new Commande();
        $commande->setUtilisateur($info);
        $commande->setDateCommande(new DateTime());
        $commande->setTotal($total);
        $commande->setEtat(0);

        $entityManager->persist($commande);

        //Entrée des détails de la commande (plats multiples)

        // $test_plat = $this->platRepository->find(9);

        foreach ($panier as $item) {
            $detail = new Detail();
            $detail->setQuantite($item["quantite"]);
            $plat = $this->platRepository->find($item["plat"]->getId());
            $detail->setPlat($plat);
            // $detail->setPlat($test_plat);
            $detail->setCommande($commande);
            // dd($detail);
            $entityManager->persist($detail);
        }

        $entityManager->flush();


        //Création Mail
        
        $ms->sendTemplatedEMail($info,$panier);

        $this->panier->viderPanier();
        
        return $this->render('commande/index.html.twig', [
            'controller_name' => 'CommandeController',
            'panier' => $panier,
            'totalprix' => $total,
            'adresse_client' => $adresse_client,
            'nom_client' => $nom_client,
            'mail_client' => $mail_client,
        ]);
    }
}
