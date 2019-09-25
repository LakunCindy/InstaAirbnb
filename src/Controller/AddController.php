<?php

namespace App\Controller;


use App\DTO\Task;
use App\Form\TaskType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class AddController extends AbstractController
{
    /**
     * @Route("/announcements/add",
     * methods={"GET","POST"},
     *     name = "Creation"
     * )
     */


    public function index(Request $request)
    {
        $task = new Task();
        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($task);
            // $entityManager->flush();
            return $this->redirectToRoute('Home');
        }
        return $this->render('form/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}