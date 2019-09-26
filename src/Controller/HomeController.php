<?php


namespace App\Controller;
use App\Entity\Housing;
use App\Services\UserManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{

    private $userManager;
    /**
     * @Route(
     *     "/",
     *  name="Home"
     * )
     */

    public function __construct(UserManager $userManager)
    {
        $this->userManager = $userManager;
    }

    public function home(){
        $limit = 2;
        $announcements = $this->userManager->findAnnouncement($limit);

        return $this->render('home/home.html.twig', ["announcements" => $announcements] );
    }
}