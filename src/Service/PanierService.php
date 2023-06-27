<?php

namespace App\Service;

use App\Entity\Plat;
use Symfony\Component\HttpFoundation\RequestStack;

class PanierService
{
    private $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    public function getPanier()
    {
        $session = $this->requestStack->getSession();
        if ($session->get('panier') != NULL) {
            return $session->get('panier');
        } else {
            return $session->set('panier', []);
        }
    }

    public function setPanier(array $panier)
    {
        $session = $this->requestStack->getSession();
        $session->set('panier', $panier);
    }

    public function viderPanier()
    {
        $this->setPanier([]);
    }

    public function ajouterPlat(Plat $plat, $quantite = 1)
    {
        $idPlat = $plat->getId();
        $panier = $this->getPanier();

        if (isset($panier[$idPlat])) {
            $panier[$idPlat]['quantite'] += $quantite;
        } else {
            $panier[$idPlat] = [
                'Plat' => $plat,
                'quantite' => $quantite,
            ];
        }

        $this->setPanier($panier);
    }

    public function supprimerPlat(Plat $plat)
    {
        $idPlat = $plat->getId();
        $panier = $this->getPanier();

        if (isset($panier[$idPlat])) {
            unset($panier[$idPlat]);
            $this->setPanier($panier);
        }
    }

    public function modifierQuantite(Plat $plat, $quantite)
    {
        $idPlat = $plat->getId();
        $panier = $this->getPanier();

        if (isset($panier[$idPlat])) {
            $panier[$idPlat]['quantite'] = $quantite;
            $this->setPanier($panier);
        }
    }

    public function getTotalPrix(): float
    {
        $totalPrix = 0.0;

        foreach ($this->getpanier() as $item) {
            $plat = $item['Plat'];
            $quantite = $item['quantite'];
            $prix = $plat->getPrix();

            $totalPrix += $prix * $quantite;
        }

        return $totalPrix;
    }

    public function getTotalQuantity(): int
    {
        $panier = $this->getPanier();
        if ($panier == NULL) {
            $totalQuantity = 0;
        } else {
            $totalQuantity = 0;

            foreach ($panier as $plat) {
                $totalQuantity += $plat['quantite'];
            }
        }

        return $totalQuantity;
    }
}
