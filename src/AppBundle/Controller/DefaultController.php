<?php

namespace AppBundle\Controller;

use AppBundle\Service\OrdemService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
  /**
    * @Route("/", name="homepage")
    */
  public function index(){
      $json = file_get_contents('https://viacep.com.br/ws/41925065/json/');
      $obj = json_decode($json);
      return new JsonResponse($obj);

      /** @var OrdemService $ordemController */
      /*
      $ordemController = $this->container->get('app.ordem_service');
      $ordensCompra = $ordemController->getListOrdensForTipo();
      $ordensVenda = $ordemController->getListOrdensForTipo(2);

      return $this->render('default/index.html.twig', [
          'ordensCompra' => $ordensCompra,
          'ordensVenda' => $ordensVenda,
          'ordens'      => $ordens
      ]);
      */
  }
}
