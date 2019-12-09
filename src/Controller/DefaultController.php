<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index()
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/figure/{id}", name="figure", requirements={"id" = "\d+"})
     */
    public function view($id)
    {
    return $this->render('default/figure.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    /**
     * @Route("/formulaire", name="formulaire")
     */
    public function create()

    {
     return $this->render('default/create.html.twig',
     ['controller_name' => 'DefaultController',
        ]);
    }

    
    
}
