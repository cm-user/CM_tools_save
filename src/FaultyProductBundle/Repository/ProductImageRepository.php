<?php

namespace FaultyProductBundle\Repository;


use Doctrine\ORM\EntityManager;
use FaultyProductBundle\Entity\ProductImage;

class ProductImageRepository
{
    private $entityManager;

    public function __construct(EntityManager $entityManager){
        $this->entityManager = $entityManager;
    }

    public function findAll(){
        return $this->entityManager->getRepository('FaultyProductBundle:ProductImage')->findAll();
    }

    public function save(ProductImage $productImage){
        $this->entityManager->persist($productImage);
        $this->entityManager->flush();
    }

    public function delete(ProductImage $productImage){
        $this->entityManager->remove($productImage);
        $this->entityManager->flush();
    }
}