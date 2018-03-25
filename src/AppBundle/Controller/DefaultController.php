<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
  /**
    * @Route("/", name="home")
    */
  public function index(){
    return $this->render('default/index.html.twig');
  }
}