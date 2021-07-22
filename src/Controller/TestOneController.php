<?php

namespace App\Controller;
    
use App\Security\FizzBuzz;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
    
class TestOneController extends AbstractController
{
    /**
     * @Route("/test1", name="test1")
     */
    
    public function index(FizzBuzz $fizzBuzz): Response
    {
        return new JsonResponse($fizzBuzz->rangeOfTheLoop());
    }
}
