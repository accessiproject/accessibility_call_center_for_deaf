<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
    * @Route("/", name="home_default") 
    * @Route("/accueil", name="home_index")
    */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
    * @Route("/presentation-et-objectifs-du-mooc", name="home_presentation") 
    */
    public function presentation()
    {
        return $this->render('home/presentation.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
    * @Route("/quelques-chiffres", name="home_chiffres")
    */
    public function chiffres()
    {
        return $this->render('home/chiffres.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
    * @Route("/quelques-notions-cles-a-connaitre", name="home_notions")
    */
    public function notions()
    {
        return $this->render('home/notions.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
    * @Route("/rendre-accessible-la-telephonie-pour-les-personnes-sourdes-ou-malentendantes", name="home_focus")
    */
    public function focus()
    {
        return $this->render('home/focus.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}