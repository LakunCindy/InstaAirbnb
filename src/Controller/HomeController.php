<?php


namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    /**
     * @Route(
     *     "/",
     *  name="Home"
     * )
     */

    public function home(){

        $announcements = [
            [

                "id" => 1,
                "title" =>"Poulet" ,
                "content" =>"Love KFC",
                "price" =>"Bucket 7€ only tuesday",
                "createdDate" => new \Datetime
            ],[

                "id" => 2,
                "title" =>"Sport" ,

            ]
        ];

        return $this->render('home/home.html.twig', ["announcements" => $announcements] );
    }



}