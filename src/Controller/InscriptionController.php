<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class InscriptionController extends AbstractController
{
    /**
     * @Route("/inscription", name="inscription")
     */
    
    public function inscription()
    {     
        return $this->render('inscription/index.html.twig', [
            'controller_name' => 'InscriptionController'
        ]);
    }
     /**

     * @Route("/authentification", name="authentification")
     */
    
    public function authentification()
    {     
        return $this->render('authentification.html.twig', [
            'controller_name' => 'InscriptionController'
        ]);
    }
}
