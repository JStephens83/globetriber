<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of MapController
 *
 * @author Laeti
 */
class MapController extends Controller{
    
    /**
     * @Route("/map")
     */
    
    public function map(){
        return $this->render('map.html.twig');
    }
    
    
}
