<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MeurphyController extends AbstractController
{
    /**
     * @Route("/meurphy", name="app_meurphy")
     */
    public function index(): Response
    {
        return $this->render('meurphy/index.html.twig', [
            'controller_name' => 'MeurphyController',
        ]);
    }
    /**
     * @Route("/cv", name="cv")
     */
    public function cv()
    {
        return $this->render('meurphy/cv.html.twig', [
            'controller_name' => 'MeurphyController',
        ]);    }
    /**
     * @Route("/accueil", name="accueil")
     */
    public function accueil()
    {
        return $this->render('meurphy/accueil.html.twig', [
            'controller_name' => 'MeurphyController',
        ]);
    }
     /**
     * @Route("/formulaire", name="formulaire")
     */
    public function formulaire()
    {
        return $this->render('meurphy/formulaire.html.twig', [
            'controller_name' => 'MeurphyController',
        ]);
    }
     /**
     * @Route("/portfolio", name="portfolio")
     */
    public function portfolio()
    {
        return $this->render('meurphy/portfolio.html.twig', [
            'controller_name' => 'MeurphyController',
        ]);
    }
    /**
     * @Route("/loisirs", name="loisirs")
     */
    public function loisirs()
    {
        return $this->render('meurphy/loisirs.html.twig', [
            'controller_name' => 'MeurphyController',
        ]);
    }
     /**
     * @Route("/curriculum vitae", name="curriculum vitae")
     */
    public function curriculum()
    {
        return $this->render('meurphy/curriculum vitae.html.twig', [
            'controller_name' => 'MeurphyController',
        ]);
    }

    
    
}
