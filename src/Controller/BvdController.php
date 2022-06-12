<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BvdController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function index(): Response
    {
        return $this->render('bvd/index.html.twig');
    }

    #[Route('/services', name:  'services')]
    public function services(): Response
    {
        return $this->render('bvd/services.html.twig');
    }

    #[Route('/whoami', name:  'whoami')]
    public function whoami(): Response
    {
        return $this->render('bvd/quisuisje.html.twig');
    }

    #[Route('/contact', name:  'contact')]
    public function contact(): Response
    {
        return $this->render('bvd/contact.html.twig');
    }
}
