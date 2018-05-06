<?php
/**
 * Created by PhpStorm.
 * User: Jonatan
 * Date: 28/04/2018
 * Time: 17:59
 */

namespace AppBundle\Utils\html\table;


class Column
{
    private $name;

    /**
     * Column constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}