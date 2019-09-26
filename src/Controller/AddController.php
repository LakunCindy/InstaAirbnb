<?php

namespace App\Controller;


use App\DTO\CreationHousing;
use App\Entity\Housing;
use App\Form\CreationHousingType;
use App\Services\UserManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AddController extends AbstractController
{
    private $userManager;

    /**
     * AddController constructor.
     */
    public function __construct(UserManager $userManager)
    {
        $this->userManager=$userManager;
    }

    /**
     * @Route("/announcements/add",
     * methods={"GET","POST"},
     *     name = "Creation"
     * )
     */


    public function index(Request $request)
    {
        //Formulaire LA VUE DONC PAS TOUCHER
        $creationHousing = new CreationHousing();
        $form = $this->createForm(CreationHousingType::class, $creationHousing);
        $form->handleRequest($request);

        //condition de push PAS TOUCHER
        if ($form->isSubmitted() && $form->isValid()) {
            //Appel d'UserManager

            //SAVE fin
            $this->userManager->save($creationHousing);

            return $this->redirectToRoute('Home');
        }
        return $this->render('form/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}