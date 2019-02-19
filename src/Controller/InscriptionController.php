<?php

namespace App\Controller;

use App\Entity\Client;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class InscriptionController extends AbstractController
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function index(Request $request, ObjectManager $manager)
    {
        $client = new Client();

//        $form = $this->createFormBuilder($client)
//            ->add("nom", TextType::class)
//            ->add("prenom", TextType::class)
//            ->add("email", EmailType::class)
//            ->add("password", PasswordType::class)
//            ->add("adresse", TextType::class)
//            ->add("ville", TextType::class)
//            ->add("departement", TextType::class)
//            ->getForm();
//
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//
//            $data = $form->getData();
//
//            dump($data);
//        }


        return $this->render('inscription/index.html.twig', [
            'controller_name' => 'InscriptionController',
//              'formClient' => $form->createView()

        ]);
    }
}
