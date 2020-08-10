<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('index.html.twig', [
            'title' => 'Ecoverde',
        ]);
    }

    /**
     * @Route("/search", name="search_property", methods={"POST"})
     */
    public function searchProperty()
    {
        return $this->redirectToRoute('get_properties');
    }
}
