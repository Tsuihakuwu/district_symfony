<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Repository\CategorieRepository;
use App\Repository\CommandeRepository;
use App\Repository\DetailRepository;
use App\Repository\PlatRepository;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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

        $this->utilisateurRepository->findAll();

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

        // $subquery = $this->entityManager->createQuery('SELECT categorie.libelle, categorie.image, categorie.id
        // FROM detail
        // JOIN plat ON plat.id = detail.plat_id
        // JOIN commande ON commande.id = detail.commande_id
        // JOIN categorie ON plat.categorie_id = categorie.id
        // WHERE commande.etat = 3 AND categorie.active = 1 AND plat.active = 1
        // GROUP BY categorie.libelle
        // ORDER BY COUNT(*) DESC');

        // $subqueryresults = $subquery->getResult();

        // $query = $this->entityManager->createQuery('SELECT T1.libelle, T1.image, T1.id
        // FROM (:subquery) AS T1
        // UNION
        // SELECT categorie.libelle, categorie.image, categorie.id
        // FROM categorie
        // WHERE categorie.active = 1
        // LIMIT 6')->setParameter('subquery', $subqueryresults);

        // $results = $query->getResult();

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

    #[Route('/categorie', name: 'app_categorie')]
    public function categorie(): Response
    {
        $utilisateurs =  $this->utilisateurRepository->findAll();
        $categories = $this->categorieRepository->findBy(['active' => true]);

        return $this->render('categorie/index.html.twig', [
            'controller_name' => 'CatalogueController',
            'cat' => $categories,
        ]);
    }

    #[Route('/plat', name: 'app_plat')]
    public function plat(): Response
    {

        $utilisateurs =  $this->utilisateurRepository->findAll();
        $plats = $this->platRepository->findBy(['active' => true]);

        return $this->render('plat/index.html.twig', [
            'controller_name' => 'CatalogueController',
            'plats' => $plats
        ]);
    }

    #[Route('/plat/{categorie_id}', name: 'app_platwithcat')]
    public function platwithcat(Request $request, Categorie $categorie_id): Response
    {
        // TODO:Utiliser l'id récupéré de l'objet pour créer la vue findby idcat
        // dd($categorie_id);
        if($request->get('categorie_id')){
            $categorie_id = $request->get('categorie_id');
            
        }
        $utilisateurs =  $this->utilisateurRepository->findAll();
        $plats = $this->platRepository->findBy(['active' => true, 'categorie' => $categorie_id]);

        return $this->render('plat/index.html.twig', [
            'controller_name' => 'CatalogueController',
            'plats' => $plats
        ]);
    }
}