<?php


namespace App\Module\App\Controller;


use WebRover\Framework\Foundation\Request;
use WebRover\Framework\Kernel\Controller\Controller;

class DefaultController extends Controller
{
    public function index(Request $request)
    {
        return $this->render('index.twig');
    }
}