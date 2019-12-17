<?php


namespace App\Controller;


use App\Entity\User;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    public function createUser($lastName, $firstName)
    {
        $user = new User(NULL, $firstName, $lastName, NULL, new DateTime());
        return $this->json($user);
    }

    public function listUser()
    {
        $user = [
            new User(1, "A","A", NULL, new DateTime()),
            new User(2, "B","B", NULL, new DateTime()),
            new User(3, "C","C", NULL, new DateTime())
        ];

        return $this->json($user);
    }
}