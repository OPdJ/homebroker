<?php

namespace AppBundle\Controller;

use AppBundle\Service\OrdemService;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
  /**
    * @Route("/", name="home")
    */
  public function index(){
      /** @var OrdemService $ordemController */
      $ordemController = $this->container->get('app.ordem_service');
      $ordensCompra = $ordemController->getListOrdensForTipo();
      $ordensVenda = $ordemController->getListOrdensForTipo(2);

      return $this->render('default/index.html.twig', [
          'ordensCompra' => $ordensCompra,
          'ordensVenda' => $ordensVenda
      ]);
  }
}
