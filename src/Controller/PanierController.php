<?php

namespace App\Controller;

use App\Entity\Plat;
use App\Repository\CategorieRepository;
use App\Repository\CommandeRepository;
use App\Repository\DetailRepository;
use App\Repository\PlatRepository;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PanierService;
use Symfony\Component\HttpFoundation\Request;

class PanierController extends AbstractController
{
    private $panier;
    private $entityManager;
    private $categorieRepository;
    private $platRepository;
    private $detailRepository;
    private $commandeRepository;
    private $utilisateurRepository;

    public function __construct(PanierService $panier, CategorieRepository $categorieRepository, PlatRepository $platRepository, DetailRepository $detailRepository, CommandeRepository $commandeRepository, UtilisateurRepository $utilisateurRepository)
    {        
        $this->panier = $panier;
        $this->categorieRepository = $categorieRepository;
        $this->platRepository = $platRepository;
        $this->detailRepository = $detailRepository;
        $this->commandeRepository = $commandeRepository;
        $this->utilisateurRepository = $utilisateurRepository;
    }

    #[Route('/panier', name: 'app_panier')]
    public function index(): Response
    {
        $panier = $this->panier->getPanier();
        if($panier != NULL){
            $total = $this->panier->getTotalPrix();
            $qtt = $this->panier->getTotalQuantity();
        }
        else {
            $total = 0;
            $qtt = "";
        }
       
        return $this->render('panier/index.html.twig', [
            'controller_name' => 'PanierController - Main',
            'panier' => $panier,
            'totalprix' => $total,
            'total_qtt' => $qtt
        ]);
    }

    #[Route('/panier/add/{id_plat}', name: 'app_panier_ajout')]
    public function ajout_plat(Request $request): Response
    {
        $this->utilisateurRepository->findAll();
        $this->commandeRepository->findAll();

        //AJOUT

        if($request->get('id_plat')){
            $id_plat = $request->get('id_plat');
        }

        $plat = $this->platRepository->findOneBy(['id' => $id_plat]);

        $this->panier->ajouterPlat($plat,1);

        return $this->redirectToRoute('app_panier');
    }
    
    #[Route('/panier/delete/{id_plat}', name: 'app_panier_delete')]
    public function delete_plat(Request $request): Response
    {
        $this->utilisateurRepository->findAll();
        $this->commandeRepository->findAll();

        //DELETE

        if($request->get('id_plat')){
            $id_plat = $request->get('id_plat');
        }

        $plat = $this->platRepository->findOneBy(['id' => $id_plat]);

        $this->panier->supprimerPlat($plat);

        return $this->redirectToRoute('app_panier');
    }

    #[Route('/panier/vider', name: 'app_panier_vider')]
    public function vider_panier(Request $request): Response
    {
        //VIDER LE PANIER

        $this->panier->viderPanier();

        return $this->redirectToRoute('app_panier');
    }
}