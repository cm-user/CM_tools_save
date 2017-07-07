<?php

namespace CM\ServiceClientBundle\Repository;

use Doctrine\ORM\EntityManager;
use CM\ServiceClientBundle\Entity\Solution;


class SolutionRepository
{
    private $entityManager;

    public function __construct(EntityManager $entityManager){
        $this->entityManager = $entityManager;
    }

    /**
     * @return array|Solution[]
     */
    public function findAll(){
        return $this->entityManager->getRepository('ServiceClientBundle:Solution')->findAll();
    }

    public function findByAsc(){
        $q = $this->entityManager->createQueryBuilder();

        $q->select('s')
            ->from('ServiceClientBundle:Solution', 's')
            ->orderBy('s.nom')
        ;

        $solution = $q->getQuery()->getResult();

        return $solution;
    }

    public function save(Solution $solution){
        $this->entityManager->persist($solution);
        $this->entityManager->flush();
    }

    public function delete(Solution $solution){
        $this->entityManager->remove($solution);
        $this->entityManager->flush();
    }
}
