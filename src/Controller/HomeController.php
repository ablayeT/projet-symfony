<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        // Remplacez cette ligne par la logique pour récupérer l'élément que vous souhaitez afficher
    $home = 'HELLO WORLD';
        return $this->render('components/home.html.twig', [
            'element' => $home,
        ]);
    }
}
