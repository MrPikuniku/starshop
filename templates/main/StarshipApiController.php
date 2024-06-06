
<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Attribute\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StarshipApiController extends AbstractController
{
    #[Route('/api/starships')]
    public function getCollection(): Response {
        $starships = [
            [
                'name' => 'USS LeafyCruiser (NCC-0001)',
                'class' => 'Garden',
                'captain' => 'Jean-Luc Pickles',
                'status' => 'taken over by Q',
            ],

            [
                'name' => 'USS Espreesso (NCC-1234-C)',
                'class' => 'Latte',
                'captain' => 'James T.Quick!',
                'status' => 'repared',
            ],

            [
                'name' => 'USS Wanderlust (NCC-2024-W)'
                'class' => 'Delta Touris',
                'captain' => 'Kathryn Journeyway',
                'status' => 'under construction',
            ],
        ];
        return $this->json($starships);   
    }  
    
}




