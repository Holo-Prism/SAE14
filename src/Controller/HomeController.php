<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/page1', name: 'app_page1')]
    public function page1(): Response
    {
        return $this->render('/page1.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/page2', name: 'app_page2')]
    public function page2(): Response
    {
        return $this->render('/page2.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
