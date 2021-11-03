<?php

namespace App\Controller;

use App\Repository\ProjetRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(ProjetRepository $projetRepository): Response
    {
        $projets = $projetRepository->FindAll();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'projets' => $projets
        ]);
    }
}
