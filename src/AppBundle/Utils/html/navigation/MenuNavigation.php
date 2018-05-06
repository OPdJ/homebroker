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
                'Colaborador',
                '',
                'fa fa-group fa-fw',
                array(
                    new MenuItem('Consultar', 'ordem-new'),
                    new MenuItem('Cadastrar', 'ordem-new'),
                )

            ),
            new MenuItem(
                'Aluno',
                '',
                'fa fa-graduation-cap fa-fw',
                array(
                    new MenuItem('Consultar', 'ordem-new'),
                    new MenuItem('Cadastrar', 'ordem-new')
                )

            ),
            new MenuItem(
                'Sala',
                '',
                'fa fa-home fa-fw',
                array(
                    new MenuItem('Consultar', 'ordem-new'),
                    new MenuItem('Cadastrar', 'ordem-new'),
                    new MenuItem(
                        'Ocorrência',
                        '',
                        'fa fa-sitemap fa-fw',
                        array(
                            new MenuItem('Consultar', 'ordem-new'),
                            new MenuItem('Cadastrar', 'ordem-new')
                        )
                    ),
                )

            ),
            new MenuItem(
                'Recursos Materiais',
                '',
                'fa fa-sitemap fa-fw',
                array(
                    new MenuItem('Consultar', 'ordem-new'),
                    new MenuItem('Cadastrar', 'ordem-new')
                )
            ),
            new MenuItem(
                'Curso',
                '',
                'fa fa-university fa-fw',
                array(
                    new MenuItem('Consultar', 'ordem-new'),
                    new MenuItem('Cadastrar', 'ordem-new'),
                    new MenuItem(
                        'Disciplina',
                        '',
                        'fa fa-book fa-fw',
                        array(
                            new MenuItem('Consultar', 'ordem-new'),
                            new MenuItem('Cadastrar', 'ordem-new')
                        )

                    ),
                )
            ),
            new MenuItem(
                'Turma',
                '',
                'fa fa-users fa-fw',
                array(
                    new MenuItem('Consultar', 'ordem-new'),
                    new MenuItem('Cadastrar', 'ordem-new'),
                    new MenuItem(
                        'Alunos',
                        '',
                        'fa fa-graduation-cap fa-fw',
                        array(
                            new MenuItem('Consultar', 'ordem-new'),
                            new MenuItem('Cadastrar', 'ordem-new')
                        )

                    ),
                )

            ),

        ];

        return $menuNav;
    }
}