<?php


namespace App\Controller;


use App\Entity\User;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    public function createUser($lastName, $firstName)
    {
        $user = new User(null, $firstName, $lastName, null, new DateTime());
        return $this->json($user);
    }
}