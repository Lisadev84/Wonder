<?php

namespace App\Controller;

use App\Repository\QuestionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(QuestionRepository $questionRepository): Response
    {
                $questions = $questionRepository->findAll();

                   // 'avatar' => 'https://randomuser.me/api/portraits/women/85.jpg'
                   // 'avatar' => 'https://randomuser.me/api/portraits/men/40.jpg'
                    //'avatar' => 'https://randomuser.me/api/portraits/men/50.jpg'
                    //'avatar' => 'https://randomuser.me/api/portraits/women/92.jpg'
        return $this->render('home/index.html.twig', [
            'questions' => $questions
        ]);
    }
}
