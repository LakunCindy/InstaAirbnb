<?php


namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class PageController extends AbstractController
{
    /**
     * @Route("/announcements/{id}",
     *     defaults={"id"=1},
     *     requirements = {"id" = "[0-9]+"},
     *     name = "List"
     *     )
     */

    public function listAnnouncement(){

        for($i = 1; $i<=10; $i++){
            $announcements[] = [
                'id' =>$i,
                'title'=>'Chicken',
                'content'=>"Love KFC",
                'price'=>"7€ only Tuesday",
                'createdDate'=>new\DateTime()
            ];


        }
        return $this->render('list/page.html.twig', [ "announcements" => $announcements] );
    }
}