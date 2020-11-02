<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;


/**
 * @Route("/advert")
 */
class  AdvertController extends AbstractController
{
    /**
     * @Route("/",name="oc_advert_index")
     * @param Environment $twig
     * @return Response
     */
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
    
    /**
     * @Route("/view/{id}", name="oc_advert_view")
     */
    public function view($id,Request $request)
    {
      // $id vaut 5 si l'URL appelée est /advert/view/5
        
       $tag = $request->query->get('tag');
        
       return $this->render('Advert/view.html.twig',['id'=>$id,'tag'=>$tag]);
        /*$response = new Response();
        $response->setContent("Ceci est une page d'erreur 404");
        
        $response->setStatusCode(Response::HTTP_NOT_FOUND);
        
        return $response;*/
      
    }
    
    


    /**
    * @Route("/view/{year}/{slug}.{_format}", name="oc_advert_view_slug", requirements={
    *   "year"   = "\d{4}",
    *   "_format" = "html|xml"
    * }, defaults={"_format" = "html"})
    */
    public function viewSlug($slug, $year, $_format)
    {
        
        
        return new Response(
          "On pourrait afficher l'annonce correspondant au
          slug '".$slug."', créée en ".$year." et au format ".$_format."."
        );
    }

}