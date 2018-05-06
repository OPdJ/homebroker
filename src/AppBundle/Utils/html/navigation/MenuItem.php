<?php
/**
 * Created by PhpStorm.
 * User: Jonatan
 * Date: 21/04/2018
 * Time: 13:48
 */

namespace AppBundle\Utils\html\navigation;


class MenuItem
{
    private $name;
    private $path;
    private $icon;
    /** @var array
     * array do tipo menuItem
     */
    private $options;

    /**
     * MenuItem constructor.
     * @param $name
     * @param $path
     * @param $icon
     * @param $options
     */
    public function __construct($name='', $path='', $icon='', $options=[])
    {
        $this->name     = $name;
        $this->path     = ($path == '' ? '#' : $path);
        $this->icon     = $icon;
        $this->options  = $options;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     */
    public function setPath($path)
    {
        $this->path = ($path == '' ? '#' : $path);
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param array $options
     */
    public function setOptions(array $options)
    {
        $this->options = $options;
    }

    public function hasOptions() {
        if ($this->getOptions()) {
            return true;
        }
        return false;
    }

    function __toString()
    {
        return [
            'name'    => $this->getName(),
            'path'    => $this->getPath(),
            'options' => $this->getOptions()
        ];
    }
}

/**
 * aqui é como foi imaginado essa classe

menu = [
    menuItem[nome, path, icon,
		options[
            menuItem[nome, path, icon],
			menuItem[nome, path, icon
				options[
                    menuItem[nome, path, icon],
					menuItem[nome, path, icon]
				]
			],
		]
	],
    menuItem[],
    menuItem[],
	....
]
 *
 */