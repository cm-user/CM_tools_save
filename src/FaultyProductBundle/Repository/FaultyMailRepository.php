<?php

namespace FaultyProductBundle\Repository;


use Doctrine\ORM\EntityManager;
use FaultyProductBundle\Entity\FaultyMail;

class FaultyMailRepository
{
    private $entityManager;

    public function __construct(EntityManager $entityManager){
        $this->entityManager = $entityManager;
    }

    public function findAll(){
        return $this->entityManager->getRepository('FaultyProductBundle:FaultyMail')->findAll();
    }

    public function save(FaultyMail $faultyMail){
        $this->entityManager->persist($faultyMail);
        $this->entityManager->flush();
    }

    public function delete(FaultyMail $faultyMail){
        $this->entityManager->remove($faultyMail);
        $this->entityManager->flush();
    }
}