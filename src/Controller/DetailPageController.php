<?php


namespace App\Controller;
use App\Services\UserManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class DetailPageController extends AbstractController
{
    private $userManager;
    public function __construct(UserManager $userManager)
    {
        $this->userManager = $userManager;
    }
    /**
     * @Route("/announcements/{id}/detail/{_locale}",
     *     name="Detail",
     *     defaults={"id"=1},
     *     requirements = {"id" = "[0-9]+"}
     *     )
     */
    public function detailAnnouncement($id){
        $announcements = $this->userManager->findHousingById($id);

        return $this->render('detail/detail.html.twig', [ "announcements"=>$announcements] );


    }
}