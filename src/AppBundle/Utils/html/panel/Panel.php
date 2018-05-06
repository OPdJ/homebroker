<?php
/**
 * Created by PhpStorm.
 * User: Jonatan
 * Date: 28/04/2018
 * Time: 21:00
 */

namespace AppBundle\Utils\html\panel;


class Panel
{
    private $title;
    private $class = "panel-default";

    /**
     * Panel constructor.
     * @param $title
     */
    public function __construct($title='')
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getClass(): string
    {
        return $this->class;
    }

    /**
     * @param string $class
     */
    public function setClass(string $class)
    {
        $this->class = $class;
    }
}