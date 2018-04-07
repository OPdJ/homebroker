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
    private $tipoAtivo;
    /** @ORM\Column(type="string") */
    private $validade;
    /** @ORM\Column(type="decimal", scale=2) */
    private $preco;
    /** @ORM\Column(type="boolean") */
    private $precoMercado;
    /** @ORM\Column(type="integer") */
    private $quantidade;
    /** @ORM\Column(type="decimal", scale=2) */
    private $totalOrdem;


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
     * Set tipoAtivo
     *
     * @param string $tipoAtivo
     * @return Ordem
     */
    public function setTipoAtivo($tipoAtivo)
    {
        $this->tipoAtivo = $tipoAtivo;

        return $this;
    }

    /**
     * Get tipoAtivo
     *
     * @return string 
     */
    public function getTipoAtivo()
    {
        return $this->tipoAtivo;
    }

    /**
     * Set validade
     *
     * @param string $validade
     * @return Ordem
     */
    public function setValidade($validade)
    {
        $this->validade = $validade;

        return $this;
    }

    /**
     * Get validade
     *
     * @return string 
     */
    public function getValidade()
    {
        return $this->validade;
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
     * Set precoMercado
     *
     * @param boolean $precoMercado
     * @return Ordem
     */
    public function setPrecoMercado($precoMercado)
    {
        $this->precoMercado = $precoMercado;

        return $this;
    }

    /**
     * Get precoMercado
     *
     * @return boolean 
     */
    public function getPrecoMercado()
    {
        return $this->precoMercado;
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
            'tipoAtivo ' => $this->getTipoAtivo()
        ];
    }
}
