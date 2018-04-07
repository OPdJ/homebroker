<?php
/**
 * Created by PhpStorm.
 * User: Jonatan
 * Date: 06/04/2018
 * Time: 21:07
 */

namespace AppBundle\Service;

use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\Ordem;

class OrdemService
{
    private $repository;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->repository = $entityManager->getRepository(Ordem::class);
    }

    public function getListOrdens() {
        return $obj = $this->repository->findAll();
    }

    public function getListOrdensForTipo($tipo = 1) {
        return $obj = $this->repository->findBy(['tipoOrdem' => $tipo]);
    }
}