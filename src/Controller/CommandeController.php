<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\Detail;
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

    public function __construct(PanierService $panierService, UtilisateurRepository $utilisateurRepository)
    {
        $this->panier = $panierService;
        $this->utilisateurRepository = $utilisateurRepository;
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

        $commande = new Commande();
        $commande->setUtilisateur($info);
        $now = new DateTime();
        $commande->setDateCommande($now);
        $commande->setTotal($total);
        $commande->setEtat(0);        

        $entityManager->persist($commande);
        $entityManager->flush();

        foreach($item as $panier){
            $detail = new Detail();
            $detail->setQuantite($qtt);
        }
        
        
        $detail->setPlat()


        //Création Mail

        // $myMail = 'commande@thedistrict.fr';
        // $ms->sendMail($data->getEmail(), $myMail, $data->getObjet(), $data->getMessage());


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
