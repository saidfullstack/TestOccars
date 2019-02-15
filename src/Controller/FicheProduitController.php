<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Produit;

class FicheProduitController extends AbstractController
{
    /**
     * @Route("/fiche_produit/{piece}", name="fiche_produit")
     */
    public function fiche_produit($piece)
    {
        $repo = $this->getDoctrine()->getRepository(Produit::class);

        // produits avec un S pour findAll
        //produit normal pour findOne

        $produits = $repo->findBy(['piece'=>$piece]);

        return $this->render('fiche_produit/index.html.twig' , [
            'produits' => $produits
        ]);
    }
}
