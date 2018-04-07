<?php
/**
 * Created by PhpStorm.
 * User: Jonatan
 * Date: 06/04/2018
 * Time: 22:27
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AtivoRepository")
 */
class Ativo
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /** @ORM\Column(type="string") */
    private $nome;

    /** @ORM\Column(type="string") */
    private $sigla;

    /** @ORM\Column(type="integer") */
    private $tipo;

    /** @ORM\Column(type="string") */
    private $mercado;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Ativo
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set sigla
     *
     * @param string $sigla
     * @return Ativo
     */
    public function setSigla($sigla)
    {
        $this->sigla = $sigla;

        return $this;
    }

    /**
     * Get sigla
     *
     * @return string 
     */
    public function getSigla()
    {
        return $this->sigla;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     * @return Ativo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set mercado
     *
     * @param string $mercado
     * @return Ativo
     */
    public function setMercado($mercado)
    {
        $this->mercado = $mercado;

        return $this;
    }

    /**
     * Get mercado
     *
     * @return string 
     */
    public function getMercado()
    {
        return $this->mercado;
    }
}
