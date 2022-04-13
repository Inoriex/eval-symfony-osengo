<?php
// src/Controller/HomeController.php;
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PosterController extends AbstractController
{
    /**
     * @Route("/", name="poster")
     */
    public function home(): Response
    {
        return $this->render('home/home.html.twig');
    }
}