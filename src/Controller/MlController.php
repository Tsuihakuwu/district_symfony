<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MlController extends AbstractController
{
    #[Route('/ml', name: 'app_ml')]
    public function index(): Response
    {
        return $this->render('ml/index.html.twig', [
            'controller_name' => 'MlController',
        ]);
    }
}
