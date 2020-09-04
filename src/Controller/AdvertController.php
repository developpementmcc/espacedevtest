<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class  AdvertController
{
    
    public function index()
    {
        $content = "<html><body>Notre propre Hello World !<body></html>";
        
        return new Response($content);
        
    }
    
    
}