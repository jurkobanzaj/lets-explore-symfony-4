<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/", name="welcome")
     */
    public function index()
    {
        return $this->render('welcome/index.html.twig');
    }

    /**
     * @Route("/hello-page/{name}", name="hello_page", defaults={"name" = "Banzaj"}, requirements={"name"="[A-Za-z]+"})
     */
    public function hello($name)
    {
        return $this->render('hello_page.html.twig', [
            'name' => $name
        ]);
    }
}
