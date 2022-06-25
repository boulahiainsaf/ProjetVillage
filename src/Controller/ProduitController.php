<?php

namespace App\Controller;

use App\Repository\ProduitsRepository;
use http\Env\Request;
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
    /**
     * @Route("/produit/{id}", name="app_detail")
     */
    public  function  detail (int $id ,

                              ProduitsRepository $produitsRepository)
    {
        $produit = $produitsRepository->find($id);
        return $this->render('accueil/detail.html.twig', [
            "produit" => $produit
        ]);

    }
}
