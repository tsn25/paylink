<?php

namespace App\Controller;
use App\Security\Fibonacci;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
    
class TestTwoController extends AbstractController
{
    /**
     * @Route("/test2{num}", name="test2", defaults={"5"})
     */
    
    public function index(Fibonacci $fibonacci, int $num): Response
    {
        return new JsonResponse($fibonacci->recursion($num));
    }
}
