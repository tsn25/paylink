<?php

namespace App\Controller;
use App\Security\Traits\MagicGetterSetter;
use App\Security\MagicGetterSetterClass;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
    
class TestThreeController extends AbstractController
{
    /**
     * @Route("/test3/getter/{magic}", name="test3")
     */
    //public function index(string $getter): Response
    public function getter(string $magic): Response
    {
        $magicGetterSetter = new MagicGetterSetterClass();
        $magicGetterSetter->magic = $magic;
        return new JsonResponse($magicGetterSetter->getter());
        
    }
    
    /**
     * @Route("/test3/setter/{setter}", name="test3")
     */
    public function setter(string $setter): Response
    {
        $test = new MagicGetterSetterClass();
        return new JsonResponse($test->setter($setter));
        
    }
}
