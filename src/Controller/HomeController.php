<?php
// src/Controller/HomeController.php;
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
    
        $lorem= "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea provident, sapiente magnam assumenda modi, alias doloribus error soluta consequatur ullam perferendis iste molestias fuga mollitia. Facere id corporis pariatur minus.";
        
        return $this->render('home/home.html.twig', [
            'loremjinx' => $lorem
        ]);

    
    }
}