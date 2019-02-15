<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Produit;

class ProduitFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
            $produit = new Produit();
            $produit->setMarque("Peugeot")
                ->setModele("307")
                ->setPiece("cardan")
                ->setEnergie("diesel")
                ->setDate(new \DateTime("2018-05-01 12:32:12"))
                ->setImage("../image/cardan1.jpg");
            $manager->persist($produit);
        $manager->flush();

        $produit = new Produit();
        $produit->setMarque("Mercedes")
            ->setModele("c220")
            ->setPiece("retroviseur")
            ->setEnergie("essence")
            ->setDate(new \DateTime("2019-02-01 18:02:45"))
            ->setImage("../image/retroviseur1.jpg");
        $manager->persist($produit);
        $manager->flush();

        $produit = new Produit();
        $produit->setMarque("Renault")
            ->setModele("clio4")
            ->setPiece("amortisseur")
            ->setEnergie("essence")
            ->setDate(new \DateTime("2019-01-15 10:07:14"))
            ->setImage("../image/amortisseur1.jpg");
        $manager->persist($produit);
        $manager->flush();

        $produit = new Produit();
        $produit->setMarque("Citroen")
            ->setModele("berlingo")
            ->setPiece("triangle")
            ->setEnergie("diesel")
            ->setDate(new \DateTime("2018-12-20 13:24:17"))
            ->setImage("../image/triangle1.jpg");
        $manager->persist($produit);
        $manager->flush();
    }
}
