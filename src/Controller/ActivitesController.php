<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActivitesController extends AbstractController
{
    /**
     * @Route("/activites", name="activites")
     */
    public function index(): Response
    {
        return $this->render('activites/index.html.twig', [
            'controller_name' => 'ActivitesController',
        ]);
    }
    public function detaill(): Response
    {
        return $this->render('activites/detaill.html.twig', [
            'controller_name' => 'ActivitesController',
        ]);
    }
    public function dashbord(): Response
    {
        return $this->render('activites/dashbord.html.twig', [
            'controller_name' => 'ActivitesController',
        ]);
    }
}
