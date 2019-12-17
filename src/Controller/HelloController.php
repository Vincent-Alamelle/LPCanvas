<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class HelloController extends AbstractController
{

    public function helloAction(){return new JsonResponse(['Test' => 666]);}

    public function numberAction($number){return new JsonResponse($number);}

    public function putAction(){return new JsonResponse(['testPut' => 666]);}
}