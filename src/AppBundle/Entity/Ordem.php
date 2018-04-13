<?php

/**
 * Created by PhpStorm.
 * User: Jonatan
 * Date: 06/04/2018
 * Time: 17:45
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrdemRepository")
 */
class Ordem implements \JsonSerializable {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /** @ORM\Column(type="integer") */
    private $tipoOrdem;
    /** @ORM\Column(type="string") */
    private $ativo;
    /** @ORM\Column(type="string") */
    private $preco;
    /** @ORM\Column(type="integer") */
    private $quantidade;
    /** @ORM\Column(type="decimal", scale=2) */
    private $totalOrdem;
    /** @ORM\Column(type="string") */
    private $statusOrdem;

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    function jsonSerialize()
    {
        return [
            'id' => $this->getId(),
            'preco' => $this->getPreco(),
            'quantidade' => $this->getQuantidade(),
            'ativo' => $this->getAtivo()
        ];
    }

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
     * Set tipoOrdem
     *
     * @param integer $tipoOrdem
     * @return Ordem
     */
    public function setTipoOrdem($tipoOrdem)
    {
        $this->tipoOrdem = $tipoOrdem;

        return $this;
    }

    /**
     * Get tipoOrdem
     *
     * @return integer 
     */
    public function getTipoOrdem()
    {
        return $this->tipoOrdem;
    }

    /**
     * Set ativo
     *
     * @param string $ativo
     * @return Ordem
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

        return $this;
    }

    /**
     * Get ativo
     *
     * @return string 
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * Set preco
     *
     * @param string $preco
     * @return Ordem
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }

    /**
     * Get preco
     *
     * @return string 
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * Set quantidade
     *
     * @param integer $quantidade
     * @return Ordem
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get quantidade
     *
     * @return integer 
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set totalOrdem
     *
     * @param string $totalOrdem
     * @return Ordem
     */
    public function setTotalOrdem($totalOrdem)
    {
        $this->totalOrdem = $totalOrdem;

        return $this;
    }

    /**
     * Get totalOrdem
     *
     * @return string 
     */
    public function getTotalOrdem()
    {
        return $this->totalOrdem;
    }

    /**
     * Set statusOrdem
     *
     * @param string $statusOrdem
     * @return Ordem
     */
    public function setStatusOrdem($statusOrdem)
    {
        $this->statusOrdem = $statusOrdem;

        return $this;
    }

    /**
     * Get statusOrdem
     *
     * @return string 
     */
    public function getStatusOrdem()
    {
        return $this->statusOrdem;
    }
}
