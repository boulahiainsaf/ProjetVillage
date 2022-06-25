<?php

namespace App\Controller;

use App\Repository\ProduitsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    /**
     * @Route("/produit", name="app_produit")
     */
    public function produit(ProduitsRepository   $produitsRepository): Response
    {
        $produits = $produitsRepository->findAll();
        return $this->render('accueil/produit.html.twig', [
            "Produits" => $produits
        ]);
    }
}
