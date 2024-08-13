<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        $questions = [
            [
                'id' => '1',
                'title' => 'Je suis une super question', 
                'content' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, omnis quae culpa maiores quisquam obcaecati laborum esse consequuntur, nobis voluptatibus impedit laudantium inventore aperiam nemo! Perspiciatis labore omnis deleniti alias.',
                'rating' => 20,
                'author'=> [
                    'name' => 'Joahnna Smith',
                    'avatar' => 'https://randomuser.me/api/portraits/women/85.jpg'
                ],
                'nbrOfResponse' => 15  
            ],
            [
                'id' => '2',
                'title' => 'Je suis une super question', 
                'content' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, omnis quae culpa maiores quisquam obcaecati laborum esse consequuntur, nobis voluptatibus impedit laudantium inventore aperiam nemo! Perspiciatis labore omnis deleniti alias.',
                'rating' => 0,
                'author'=> [
                    'name' => 'John Smith',
                    'avatar' => 'https://randomuser.me/api/portraits/men/40.jpg'
                ],
                'nbrOfResponse' => 5 
            ],
            [
                'id' => '3',
                'title' => 'Je suis une super question', 
                'content' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, omnis quae culpa maiores quisquam obcaecati laborum esse consequuntur, nobis voluptatibus impedit laudantium inventore aperiam nemo! Perspiciatis labore omnis deleniti alias.',
                'rating' => -7,
                'author'=> [
                    'name' => 'andreas Smith',
                    'avatar' => 'https://randomuser.me/api/portraits/men/50.jpg'
                ],
                'nbrOfResponse' => 9  
            ],
            [
                'id' => '4',
                'title' => 'Je suis une super question', 
                'content' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, omnis quae culpa maiores quisquam obcaecati laborum esse consequuntur, nobis voluptatibus impedit laudantium inventore aperiam nemo! Perspiciatis labore omnis deleniti alias.',
                'rating' => 6,
                'author'=> [
                    'name' => 'Anne Lenom',
                    'avatar' => 'https://randomuser.me/api/portraits/women/54.jpg'
                ],
                'nbrOfResponse' => 10 
            ],
            [
                'id' => '5',
                'title' => 'Je suis une super question', 
                'content' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, omnis quae culpa maiores quisquam obcaecati laborum esse consequuntur, nobis voluptatibus impedit laudantium inventore aperiam nemo! Perspiciatis labore omnis deleniti alias.',
                'rating' => -2,
                'author'=> [
                    'name' => 'Line Brandon',
                    'avatar' => 'https://randomuser.me/api/portraits/women/92.jpg'
                ],
                'nbrOfResponse' => 18  
            ],
        ];

        return $this->render('home/index.html.twig', [
            'questions' => $questions
        ]);
    }
}
