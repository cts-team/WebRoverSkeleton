<?php


namespace App\Bundle\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use WebRover\Framework\Kernel\Controller\Controller;

/**
 * Class DefaultController
 * @package App\Bundle\AppBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        return $this->render('index.html.twig');
    }
}