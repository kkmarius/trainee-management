<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return $this->render('lucky/index.html.twig', [
            'controller_name' => 'LuckyController',
        ]);
    }
    
    /**
     * @Route("/services", name="services")
     */
    public function services()
    {
        return $this->render('lucky/services.html.twig');
    }

      
    /**
     * @Route("/stages", name="stages")
     */
    public function stages()
    {
        return $this->render('lucky/stages.html.twig');
    }

     /**
     * @Route("/apropos", name="about")
     */
    public function about()
    {
        return $this->render('lucky/about.html.twig');
    }

    /**
     * @Route("/connexion", name="login")
     */
    public function connexion()
    {
        return $this->render('lucky/login.html.twig');
    }

}
