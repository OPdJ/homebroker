<?php
/**
 * Created by PhpStorm.
 * User: Jonatan
 * Date: 24/03/2018
 * Time: 13:23
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    /**
     * @Route("/log", name="login")
     */
    public function loginAction() {
        return $this->render('default/form-compra-venda.html.twig');
    }
}