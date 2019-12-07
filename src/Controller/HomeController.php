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

    /**
    * @Route("/bref-rappel-du-cadre-juridique", name="home_juridique")
    */
    public function juridique()
    {
        return $this->render('home/juridique.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
    * @Route("/solutions-techniques-proposees", name="home_solutions")
    */
    public function solutions()
    {
        return $this->render('home/solutions.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
    * @Route("/de-nouveaux-defis-a-relever", name="home_contraintes")
    */
    public function contraintes()
    {
        return $this->render('home/contraintes.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
    * @Route("/conseils-et-preconisations", name="home_preconisations")
    */
    public function preconisations()
    {
        return $this->render('home/preconisations.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
    * @Route("/innovations", name="home_innovations")
    */
    public function innovations()
    {
        return $this->render('home/innovations.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}