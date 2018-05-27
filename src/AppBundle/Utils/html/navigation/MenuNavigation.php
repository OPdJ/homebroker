<?php
/**
 * Created by PhpStorm.
 * User: Jonatan
 * Date: 21/04/2018
 * Time: 13:20
 */

namespace AppBundle\Utils\html\navigation;


use AppBundle\Utils\html\navigation\MenuItem;

class MenuNavigation
{
    private $menuNav = [];

    /**
     * MenuNavigation constructor.
     * @param array $menuNav
     */
    public function __construct()
    {
        $this->menuNav = $this->createMenu();
    }


    /**
     * @return array
     */
    public function getMenuNav()
    {
        return $this->menuNav;
    }

    public function createMenu()
    {
        //criando os itens do menu
        $menuNav = [

            new MenuItem(
                'Minha Conta',
                '',
                'fa fa-group fa-fw',
                array(
                    new MenuItem('Meus Ativos', 'ordem-new'),
                    new MenuItem('Extrato Financeiro', 'ordem-new'),
                    new MenuItem('Controle Patrimonial', 'ordem-new'),
                    new MenuItem('Historico', 'historico'),
                )

            ),
            new MenuItem(
                'Operações',
                '',
                'fa fa-graduation-cap fa-fw',
                array(
                    new MenuItem('Renda Variável', 'ordem-new'),
                    new MenuItem('Renda Fixa', 'ordem-new'),
                    new MenuItem('Ordens', 'ordem-new')
                )

            ),

        ];

        return $menuNav;
    }
}