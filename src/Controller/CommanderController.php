<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CommanderController extends AbstractController
{
    /**
     * @Route("/commander", name="commander")
     */
    public function index()
    {
        return $this->render('commander/index.html.twig', [
            'controller_name' => 'CommanderController',
        ]);
    }
}
