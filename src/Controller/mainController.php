<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class mainController extends AbstractController
{
    #[Route("/", name: "home")]
    public function homepage() :Response
    {
        $Title="Munich Car Company";
        return $this->render('home.html.twig',['Title' => $Title]);
    }

    #[Route("/contact", name: "contact")]
    public function contactPage() :Response
    {
        $Title="Contact Page";
        return $this->render('contact.html.twig',['Title' => $Title]);
    }

    #[Route("/test",name: "test")]
    public function testPage() :Response
    {
        $Title="Testing Page";
        return $this->render('test.html.twig',['Title'=>$Title]);
    }

}