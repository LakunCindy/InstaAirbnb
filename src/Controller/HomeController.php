<?php


namespace App\Controller;
use App\Services\UserManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    private $userManager;


    public function __construct(UserManager $userManager)
    {
        $this->userManager = $userManager;
    }
    /**
     * @Route(
     *     "/{_locale}",
     *      name="Home",
     * )
     */
    public function home(){
        $limit = 2;
        $announcements = $this->userManager->findAnnouncement($limit);

        return $this->render('home/home.html.twig', ["announcements" => $announcements] );
    }
}