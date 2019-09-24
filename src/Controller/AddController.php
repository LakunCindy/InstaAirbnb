<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class AddController extends AbstractController
{
    /**
     * @Route("/announcements/add",
     * methods={"GET","POST"},
     *     name = "Creation"
     * )
     */
    public function index (){
        return $this->render('form/form.html.twig' );
    }
}