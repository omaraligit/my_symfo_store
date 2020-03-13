<?php

namespace App\Controller;

use App\Entity\Ads;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $ads = $this->getDoctrine()
        ->getRepository(Ads::class)
        ->findAll();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'ads'=>$ads
        ]);
    }
}
