<?php

namespace App\Controller;

use App\Entity\Cars;
use App\Repository\CarsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class mainController extends AbstractController
{

    // using a constructor to give access to all the functions
//    private $em;
//    public function __construct(EntityManagerInterface $em)
//    {
//        $this->em = $em;
//    }

    private $carsRepository;
    public function __construct(CarsRepository $carsRepository){
        $this->carsRepository = $carsRepository;
    }
    #[Route("/", name: "home")]
    public function homepage() :Response
    {
        $Title="Cars.com";

        $cars= $this->carsRepository->findAll();

        return $this->render('general/home.html.twig',['Title' => $Title, 'cars'=>$cars]);
    }

    #[Route("/contact", name: "contact")]
    public function contactPage() :Response
    {
        $Title="Contact Page";
        return $this->render('general/contact.html.twig',['Title' => $Title]);
    }

    #[Route("/cars", name: "cars")]
    public function carsPage() :Response
    {
        $Title="Cars Page";
        return $this->render('cars/car.html.twig',['Title' => $Title]);
    }

    #[Route("/signin", name: "signin")]
    public function signInPage() :Response
    {
        $Title="Sign in";
        return $this->render('users/signin.html.twig',['Title' => $Title]);
    }

    #[Route("/signup", name: "signup")]
    public function signUpPage() :Response
    {
        $Title="Sign up";
        return $this->render('users/signup.html.twig',['Title' => $Title]);
    }

    #[Route("/test",name: "test")]
    public function testPage() :Response
    {
        $Title="Testing Page";

        // Delete after testing

        //findAll() - SELECT * FROM cars;
        //find() - SELECT * FROM cars WHERE id = *INSERT ID*
        //findBy() - SELECT * FROM cars ORDER BY id DESC (** for descending order )
        //count(['id' => 5]) --- counts the number of "id" in this case -- use it for counting number of cars
        $repository = $this->em->getRepository(Cars::class);
        $cars = $repository->findBy([],["id" => "DESC"]);

        dd($cars);
        //Delete till here after testing
        return $this->render('test.html.twig',['Title'=>$Title]);
    }

    #[Route("/error", name: "error")]
    public function errorPage() :Response
    {
        $Title="Error 404";
        return $this->render('general/error.html.twig',['Title' => $Title]);
    }

}