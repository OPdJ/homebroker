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
    
    /** @ORM\Column(type="datetime") */
    private $dataInclusao;

    /** @ORM\Column(type="decimal") */
    private $precoInclusao;
    
    /** @ORM\Column(type="decimal", scale=2) */
    private $precoAtual;

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
     * Set dataInclusao
     *
     * @param \DateTime $dataInclusao
     * @return Ativo
     */
    public function setDataInclusao($dataInclusao)
    {
        $this->dataInclusao = $dataInclusao;

        return $this;
    }

    /**
     * Get dataInclusao
     *
     * @return \DateTime 
     */
    public function getDataInclusao()
    {
        return $this->dataInclusao;
    }

    /**
     * Set precoInclusao
     *
     * @param string $precoInclusao
     * @return Ativo
     */
    public function setPrecoInclusao($precoInclusao)
    {
        $this->precoInclusao = $precoInclusao;

        return $this;
    }

    /**
     * Get precoInclusao
     *
     * @return string 
     */
    public function getPrecoInclusao()
    {
        return $this->precoInclusao;
    }

    /**
     * Set precoAtual
     *
     * @param string $precoAtual
     * @return Ativo
     */
    public function setPrecoAtual($precoAtual)
    {
        $this->precoAtual = $precoAtual;

        return $this;
    }

    /**
     * Get precoAtual
     *
     * @return string 
     */
    public function getPrecoAtual()
    {
        return $this->precoAtual;
    }
}
