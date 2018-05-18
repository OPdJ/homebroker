<?php

namespace AppBundle\Controller;

use AppBundle\Service\OrdemService;
<<<<<<< HEAD
use AppBundle\Utils\OrdemTipo;
=======
use Symfony\Component\HttpFoundation\JsonResponse;
>>>>>>> jonatan
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
  /**
    * @Route("/", name="homepage")
    */
  public function index(){
      $json = file_get_contents('https://viacep.com.br/ws/41750290/json/');
      $obj = json_decode($json);
      return new JsonResponse($obj);

      /** @var OrdemService $ordemController */
<<<<<<< HEAD
      $ordemService = $this->container->get('app.ordem_service');
      $ordens = $ordemService->getListOrdens();
      $ordensCompra = $ordemService->getListOrdensForTipo(OrdemTipo::COMPRA);
      $ordensVenda = $ordemService->getListOrdensForTipo(OrdemTipo::VENDA);
=======
      /*
      $ordemController = $this->container->get('app.ordem_service');
      $ordensCompra = $ordemController->getListOrdensForTipo();
      $ordensVenda = $ordemController->getListOrdensForTipo(2);
>>>>>>> jonatan

      return $this->render('default/index.html.twig', [
          'ordensCompra' => $ordensCompra,
          'ordensVenda' => $ordensVenda,
          'ordens'      => $ordens
      ]);
      */
  }
}
