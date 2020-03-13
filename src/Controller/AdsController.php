<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdsController extends AbstractController
{
    /**
     * @Route("/ads", name="ads")
     */
    public function index()
    {
        return $this->render('ads/index.html.twig', [
            'controller_name' => 'AdsController',
        ]);
    }
}
