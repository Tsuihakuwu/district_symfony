<?php

namespace App\Controller;

use App\Service\PanierService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommandeController extends AbstractController
{
    private $panier;

    public function __construct(PanierService $panierService)
    {
        $this->panier = $panierService;
    }

    #[Route('/commande', name: 'app_commande')]
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

        // FIXME: Recupérer proprement un objet user pour traitement

        $this->denyAccessUnlessGranted('ROLE_CLIENT');

        $user = $this->getUser();

        $user->getNom();

        // $userdata = [;];

        dd($user);
        
        // TODO: Coder inscription en base de données d'une nouvelle commande et VIDER LE PANIER ?

        return $this->render('commande/index.html.twig', [
            'controller_name' => 'CommandeController',
            'panier' => $panier,
            'totalprix' => $total,
            'userdata' => $userdata,
        ]);
        }
}
