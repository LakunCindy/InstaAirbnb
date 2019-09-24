<?php


namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class DetailPageController extends AbstractController
{
    /**
     * @Route("/announcements/{id}/detail",
     *     name="Detail",
     *     defaults={"id"=1},
     *     requirements = {"id" = "[0-9]+"}
     *     )
     */

    public function detailAnouncement(int $id){
        $announcements = [];
        for($i = 1; $i<=10; $i++){
            $announcements[] = [
                'id' =>$i,
                'title'=>'Chicken',
                'content'=>"Love KFC",
                'price'=>"7€ only Tuesday",
                'createdDate'=>new\DateTime()
            ];


        }

        return $this->render('detail/detail.html.twig', [ "id" => $id, "announcements"=>$announcements] );


    }
}