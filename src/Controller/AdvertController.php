<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class  AdvertController
{
    
    public function index(Environment $twig)
    {
        //$content = "<html><body>Notre propre Hello World !<body></html>";
        //$content = $twig->render('Advert/index.html.twig');
        $content = $twig->render('Advert/index.html.twig', ['name' => 'winzou']);
        
        return new Response($content);
        
    }
    
    public function bye(Environment $twig)
    {
        //$content = $twig->render('Advert/bye.html.twig', ['name' => 'winzou']);
        //$content = "<html><body>Notre propre Hello World !<body></html>";
        $content = $twig->render('Advert/bye.html.twig', ['name' => 'winzou']);
        
        return new Response($content);
        
    }
    
}