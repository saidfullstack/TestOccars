<?php

namespace App\Controller;

use App\Entity\Client;
use App\Form\ClientType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class InscriptionController extends AbstractController
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function index(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        // 1) build the form
        $client = new Client();
        $form = $this->createForm(\App\Form\ClientType::class, $client);

        // 2) handle the submit (only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password ( possibilité aussi de passer par DOctrine Listener)
            $password = $passwordEncoder->encodePassword($client, $client->getPlainPassword());
            $client->setPassword($password);

            // 4) save the Client
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($client);
            $entityManager->flush();

            return $this->redirectToRoute('commander');
        }

        return $this->render(
            'inscription/index.html.twig',
            array('form' => $form->createView())
        );

    }

}
