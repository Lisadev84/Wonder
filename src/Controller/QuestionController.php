<?php

namespace App\Controller;

use App\Form\QuestionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/question', name: 'question_')]
class QuestionController extends AbstractController
{
    #[Route('/ask', name: 'form')]
    public function index(Request $request): Response
    {
        $formQuestion = $this->createForm(QuestionType::class);

        $formQuestion->handleRequest($request);

        if ($formQuestion->isSubmitted() && $formQuestion->isValid()) {
           
        }

        return $this->render('question/index.html.twig', [
            'form' => $formQuestion->createView(),
        ]);
    }

    #[Route('/{id}', name: 'show')]
    public function showQuestion(Request $request, string $id): Response
    {
        $question = [
            // 'id' => '1',
            'title' => 'Je suis une super question', 
            'content' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, omnis quae culpa maiores quisquam obcaecati laborum esse consequuntur, nobis voluptatibus impedit laudantium inventore aperiam nemo! Perspiciatis labore omnis deleniti alias.',
            'rating' => 20,
            'author'=> [
                'name' => 'Joahnna Smith',
                'avatar' => 'https://randomuser.me/api/portraits/women/85.jpg'
            ],
            'nbrOfResponse' => 15  
        ];

        return $this->render('question/show-question.html.twig', [
            'question' => $question,
        ]);
    }
}
