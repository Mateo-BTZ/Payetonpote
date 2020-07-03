<?php

namespace App\Controller;
use App\Entity\Campaign;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;



class HomeController extends AbstractController
{
    
    // public function index()
    // {
    //     return $this->render('home/index.html.twig', [
    //         'controller_name' => 'HomeController',
    //     ]);
    //  }

    /**
     * @Route("/", name="home", methods={"GET"})
     */
    public function index()
    {
        $campaigns = $this->getDoctrine()
            ->getRepository(Campaign::class)
            ->findAll();

        return $this->render('home/index.html.twig', [
            'campaigns' => $campaigns,
        ]);
    }
}
