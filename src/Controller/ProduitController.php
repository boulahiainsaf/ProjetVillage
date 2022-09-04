<?php

namespace App\Controller;

use App\Repository\ProduitsRepository;
use App\Repository\UserRepository;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    /**
     * @Route("/produit", name="app_produit")
     */
    public function produit(ProduitsRepository   $produitsRepository,
    UserRepository $userRepository):Response
    {
        $produits = $produitsRepository->findAll();
        if ($this->getUser()!= null) {
            $user = $this->getUser()->getUserIdentifier();
            $client = $userRepository->findBy(["email" => $user]);
            return $this->render('accueil/produit.html.twig', [
                "Produits" => $produits,
                "user"=>$user,
                "client"=>$client[0]

            ]);
        }else{
            return $this->render('accueil/produit.html.twig', [
                "Produits" => $produits]);
        }


    }
    /**
     * @Route("/produit/{id}", name="app_detail")
     */
    public  function  detail (int $id ,

                              ProduitsRepository $produitsRepository)
    {

        $produit = $produitsRepository->find($id);
        return $this->render('accueil/detail.html.twig', [
            "produit" => $produit,

        ]);

    }
}
