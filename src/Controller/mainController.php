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
    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

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

}