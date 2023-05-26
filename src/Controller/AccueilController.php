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

class AccueilController extends AbstractController
{
    #[Route('/accueil', name: 'app_accueil')]
    public function index(EntityManagerInterface $entityManager, CategorieRepository $categorieRepository, PlatRepository $platRepository, DetailRepository $detailRepository, CommandeRepository $commandeRepository, UtilisateurRepository $utilisateurRepository): Response
    {

        $utilisateurs =  $utilisateurRepository->findAll();
        $commandes = $commandeRepository->findAll();
        $details = $detailRepository->findAll();
        $plats = $platRepository->findAll();
        $categories = $categorieRepository->findAll();

        //Requête pour afficher les 6 catégories les plus populaires et completer avec d'autres s'il la base n'est pas alimentée pour obtenir 6
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

        $connection = $entityManager->getConnection();
        $statement = $connection->executeQuery($query);
        $results = $statement->fetchAllAssociative();

        $mostpopplat = $commandeRepository->mostpopplat();

        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
            'topsix' => $results,
            'mp_plat' => $mostpopplat,
        ]);
    }
}
