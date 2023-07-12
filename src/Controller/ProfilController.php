<?php


namespace App\Controller;

use App\Repository\UtilisateurRepository;
use App\Service\PanierService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{
    private $panier;
    private $utilisateurRepository;
    private $entityManagerInterface;

    public function __construct(UtilisateurRepository $utilisateurRepository, PanierService $panier, EntityManagerInterface $entityManagerInterface)
    {
        $this->utilisateurRepository = $utilisateurRepository;
        $this->panier = $panier;
        $this->entityManagerInterface = $entityManagerInterface;
        
    }
    #[Route('/profil', name: 'app_profil')]
    public function index(): Response
    {
        $securityContext = $this->container->get('security.authorization_checker');
        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $panier = $this->panier->getPanier();
            $qtt = $this->panier->getTotalQuantity();
            $identifiant = $this->getUser()->getUserIdentifier();
            if ($identifiant) {
                $info = $this->utilisateurRepository->findOneBy(["email" => $identifiant]);
            }
        } else {
            $this->addFlash('error', 'Erreur : Utilisateur déconnecté ! Veuillez vous reconnecter.');
            return $this->redirectToRoute('app_accueil');
        }

        return $this->render('profil/index.html.twig', [
            'informations' => $info,
            'panier' => $panier,
            'total_qtt' => $qtt,
        ]);
    }

    #[Route('/profil/update', name: 'app_profil_update')]
    public function profil_update(Request $request, EntityManagerInterface $entityManager): Response
    {
        //Récup de l'id utilisateur
        $identifiant = $this->getUser()->getUserIdentifier();
        if ($identifiant) {
            $info = $this->utilisateurRepository->findOneBy(["email" => $identifiant]);
        } else {
            $this->addFlash('error', 'Erreur d\'utilisateur - Veuillez vous reconnecter.');
            return $this->redirectToRoute('app_accueil');
        }

        //Recup des données du formulaire
        $email = $identifiant;
        $nom = $request->request->get('nom');
        $prenom = $request->request->get('prenom');
        $telephone = $request->request->get('telephone');
        $adresse = $request->request->get('adresse');
        $cp = $request->request->get('cp');
        $ville = $request->request->get('ville');

        //Contruction et execution de la requête via fonction updateuser avec querybuilder dans utilisateurRepo
        $this->utilisateurRepository->updateUser($email,$nom,$prenom,$telephone,$adresse,$cp,$ville);

        $this->addFlash('success', 'Votre profil a bien été mis à jour !');
        return $this->redirectToRoute('app_profil');
    }

    #[Route('/profil/historique', name: 'app_historique')]
    public function historique(): Response
    {
        $securityContext = $this->container->get('security.authorization_checker');
        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $panier = $this->panier->getPanier();
            $qtt = $this->panier->getTotalQuantity();
            $identifiant = $this->getUser()->getUserIdentifier();
            if ($identifiant) {
                $info = $this->utilisateurRepository->findOneBy(["email" => $identifiant]);
            }
        } else {
            $this->addFlash('error', 'Erreur : Utilisateur déconnecté ! Veuillez vous reconnecter.');
            return $this->redirectToRoute('app_accueil');
        }

        $results = $this->utilisateurRepository->getHistorique($info->getId());

        return $this->render('profil/historique.html.twig', [
            'informations' => $info,
            'historique' => $results,
            'panier' => $panier,
            'total_qtt' => $qtt,
            
        ]);
    }
}
