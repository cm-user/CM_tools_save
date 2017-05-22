<?php

namespace ShopBundle\Repository;


use Doctrine\ORM\EntityManager;
use ShopBundle\Entity\CarouselProduct;

class CarouselProductRepository
{
    private $entityManager;

    public function __construct(EntityManager $entityManager){
        $this->entityManager = $entityManager;
    }

    /**
     * @return array|CarouselProduct[]
     */
    public function findAll(){
        return $this->entityManager->getRepository('ShopBundle:CarouselProduct')->findAll();
    }

    public function save(CarouselProduct $carouselProduct){
        $this->entityManager->persist($carouselProduct);
        $this->entityManager->flush();
    }

    public function delete(CarouselProduct $carouselProduct){
        $this->entityManager->remove($carouselProduct);
        $this->entityManager->flush();
    }
}