<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\CommandeRepository;
use App\Repository\DetailRepository;
use App\Repository\PlatRepository;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatalogueController extends AbstractController
{
    //Mes entités
    private $entityManager;
    private $categorieRepository;
    private $platRepository;
    private $detailRepository;
    private $commandeRepository;
    private $utilisateurRepository;

    //Constructeur
    public function __construct(EntityManagerInterface $entityManager, CategorieRepository $categorieRepository, PlatRepository $platRepository, DetailRepository $detailRepository, CommandeRepository $commandeRepository, UtilisateurRepository $utilisateurRepository)
    {
        $this->entityManager = $entityManager;
        $this->categorieRepository = $categorieRepository;
        $this->platRepository = $platRepository;
        $this->detailRepository = $detailRepository;
        $this->commandeRepository = $commandeRepository;
        $this->utilisateurRepository = $utilisateurRepository;
    }

    #[Route('/', name: 'app_accueil')]
    public function index(): Response
    {

        $utilisateurs =  $this->utilisateurRepository->findAll();
        $commandes = $this->commandeRepository->findAll();
        $details = $this->detailRepository->findAll();
        $plats = $this->platRepository->findAll();
        $categories = $this->categorieRepository->findAll();

        //Requête pour afficher les 6 catégories les plus populaires et completer avec d'autres si la base n'est pas assez alimentée pour obtenir un total de 6
        $query = <<<SQL
        SELECT T1.libelle, T1.image, T1.id
        FROM (
            SELECT categorie.libelle, categorie.image, categorie.id
            FROM detail
            JOIN plat ON plat.id = detail.plat_id
            JOIN commande ON commande.id = detail.commande_id
            JOIN categorie ON plat.categorie_id = categorie.id
            WHERE commande.etat = 3 AND categorie.active = 1 AND plat.active = 1
            GROUP BY categorie.libelle
            ORDER BY COUNT(*) DESC
        ) AS T1
        UNION
        SELECT categorie.libelle, categorie.image, categorie.id
        FROM categorie
        WHERE categorie.active = 1
        LIMIT 6
        SQL;

        $connection = $this->entityManager->getConnection();
        $statement = $connection->executeQuery($query);
        $results = $statement->fetchAllAssociative();

        $mostpopplat = $this->commandeRepository->mostpopplat();

        return $this->render('catalogue/index.html.twig', [
            'controller_name' => 'CatalogueController',
            'topsix' => $results,
            'mp_plat' => $mostpopplat,
        ]);
    }

    #[Route('/cgu', name: 'app_cgu')]
    public function cgu(): Response
    {
        return $this->render('cgu/index.html.twig', [
            'controller_name' => 'CatalogueController',
        ]);
    }

    #[Route('/legal', name: 'app_ml')]
    public function legal(): Response
    {
        return $this->render('ml/index.html.twig', [
            'controller_name' => 'CatalogueController',
        ]);
    }
}