<?php

namespace FaultyProductBundle\Repository;


use Doctrine\ORM\EntityManager;
use FaultyProductBundle\Entity\Product;

class ProductRepository
{
    private $entityManager;

    public function __construct(EntityManager $entityManager){
        $this->entityManager = $entityManager;
    }

    public function findAll(){
        return $this->entityManager->getRepository('FaultyProductBundle:Product')->findAll();
    }

    public function save(Product $product){
        $this->entityManager->persist($product);
        $this->entityManager->flush();
    }

    public function delete(Product $product){
        $this->entityManager->remove($product);
        $this->entityManager->flush();
    }
}