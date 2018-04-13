<?php

namespace AppBundle\Controller;

use AppBundle\Service\OrdemService;
use AppBundle\Utils\OrdemTipo;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
  /**
    * @Route("/", name="home")
    */
  public function index(){
      /** @var OrdemService $ordemController */
      $ordemService = $this->container->get('app.ordem_service');
      $ordens = $ordemService->getListOrdens();
      $ordensCompra = $ordemService->getListOrdensForTipo(OrdemTipo::COMPRA);
      $ordensVenda = $ordemService->getListOrdensForTipo(OrdemTipo::VENDA);

      return $this->render('default/index.html.twig', [
          'ordensCompra' => $ordensCompra,
          'ordensVenda' => $ordensVenda,
          'ordens'      => $ordens
      ]);
  }
}
