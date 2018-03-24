<?php
/**
 * Created by PhpStorm.
 * User: Jonatan
 * Date: 24/03/2018
 * Time: 13:23
 */

namespace AppBundle\Controller;

use AppBundle\Form\FormOrdemType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    /**
     * @Route("/log", name="login")
     */
    public function loginAction() {
        $form = $this->createForm(FormOrdemType::class);


        return $this->render('default/form-compra-venda.html.twig',
            array(
                'form' => $form->createView(),
            )
        );
    }
}