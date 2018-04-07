<?php
/**
 * Created by PhpStorm.
 * User: Jonatan
 * Date: 06/04/2018
 * Time: 18:07
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Ordem;
use AppBundle\Form\FormOrdemType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/** @Route("/ordem") */
class OrdemController extends Controller {
    /**
     * @Route("/new", name="ordem-new")
     */
    function newOrdemAction(Request $request) {
        $ordem = new Ordem();
        $form = $this->createForm(FormOrdemType::class, $ordem);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            if($ordem->getPreco() > 0 && $ordem->getQuantidade() > 0 ){
                $totalOrdem = $ordem->getPreco() * $ordem->getQuantidade();
                $ordem->setTotalOrdem($totalOrdem);
            }

            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($ordem);
            $em->flush();

            return $this->redirectToRoute('home');
            //return new Response('Created product id '.$ordem->getId());
        }

        return $this->render("Forms/form-ordem.html.twig", [
            'form' => $form->createView()
        ]);
    }
}