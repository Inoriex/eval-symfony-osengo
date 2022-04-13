<?php
// src/Controller/HomeController.php;
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FigurineController extends AbstractController
{
    /**
     * @Route("/figurine", name="figurine")
     */
    public function figurine(): Response
    {
        {
        $lorem= "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea provident, sapiente magnam assumenda modi, alias doloribus error soluta consequatur ullam perferendis iste molestias fuga mollitia. Facere id corporis pariatur minus.";
        
        return $this->render('figurine/figurine.html.twig', ['loremjinx' => $lorem]);

    }
    }
}