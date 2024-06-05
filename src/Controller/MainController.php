<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends  AbstractController
{
    #[Route('/')]
    public function HomePage() : Response
    {
        $starshipCount = 457;
        $myShip =[
            'name' => 'USS LeafyCruiser (NCC-0001)',
            'class' => 'Garden',
            'captain' => 'Jean-Luc Pickles',
            'status' => 'under constrution',
        ];



        return $this->render("main/homepage.html.twig", [
            'numberOfStarships' => $starshipCount,
            'myShip'=> $myShip, 
        ]);
    }
}
