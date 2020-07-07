<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController{

    // Route accueil
    /**
     * @Route ("/accueil", name = "accueil")
     */
    public function accueil()
    {
        return $this->render("accueil.html.twig");

    }


    // Route articles

    /**
     * @Route ("/articles", name = "articles")
     */
    public function articles()
    {
        return $this->render("articles.html.twig");
    }
























}