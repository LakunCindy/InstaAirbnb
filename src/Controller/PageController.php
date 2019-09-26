<?php


namespace App\Controller;
use App\Entity\Housing;
use App\Entity\User;
use App\Services\UserManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class PageController extends AbstractController
{
    private $userManager;
    /**
     * @Route("/announcements/{id}",
     *     defaults={"id"=1},
     *     requirements = {"id" = "[0-9]+"},
     *     name = "List"
     *     )
     */

    public function __construct(UserManager $userManager)
    {
        $this->userManager = $userManager;
    }

    public function listAnnouncement(){
        $limit = 10;
        $announcements = $this->userManager->findAnnouncement($limit);

        return $this->render('list/page.html.twig', [ "announcements" => $announcements] );
    }
}