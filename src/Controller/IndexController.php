<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class IndexController
 * @package App\Controller
 */
class IndexController extends AbstractController {
    /**
     * @Route("/", name="homePage")
     */
    public function showHomePage()
    {
        return $this->render('index/home-page.html.twig');
    }
}