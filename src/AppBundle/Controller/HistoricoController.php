<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Ordem;
use AppBundle\Utils\OrdemStatus;
use AppBundle\Form\FormOrdemType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/** @Route("/historico") */
class HistoricoController extends Controller {
    /**
     * @Route("/", name="historico")
     */
    function Index(Request $request) {
        $ordens = $this->getDoctrine()->getEntityManager()->
                                            getRepository('AppBundle:Ordem')->findAll();

        
        return $this->render("Forms/form-historico.html.twig", [
            'ordens' => $ordens
        ]);
    }
}