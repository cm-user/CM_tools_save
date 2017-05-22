<?php

namespace ShopBundle\Repository;


use Doctrine\ORM\EntityManager;

class CarouselRepository
{
    private $entityManager;

    public function __construct(EntityManager $entityManager){
        $this->entityManager = $entityManager;
    }

    /**
     * @return array
     */
    public function findToday(){

    }
}