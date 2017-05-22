<?php

namespace FaultyProductBundle\Repository;


use Doctrine\ORM\EntityManager;
use FaultyProductBundle\Entity\FaultyAction;

class FaultyActionRepository
{
    private $entityManager;

    public function __construct(EntityManager $entityManager){
        $this->entityManager = $entityManager;
    }

    public function findAll(){
        return $this->entityManager->getRepository('FaultyProductBundle:FaultyAction')->findAll();
    }

    public function save(FaultyAction $faultyAction){
        $this->entityManager->persist($faultyAction);
        $this->entityManager->flush();
    }

    public function delete(FaultyAction $faultyAction){
        $this->entityManager->remove($faultyAction);
        $this->entityManager->flush();
    }
}