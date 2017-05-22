<?php

namespace FaultyProductBundle\Repository;


use Doctrine\ORM\EntityManager;
use FaultyProductBundle\Entity\Faulty;
use FaultyProductBundle\Entity\Supplier;

class FaultyRepository
{
    private $entityManager;

    public function __construct(EntityManager $entityManager){
        $this->entityManager = $entityManager;
    }

    public function findAll(){
        return $this->entityManager->getRepository('FaultyProductBundle:Faulty')->findAll();
    }

    public function findBy(array $criteres, array $order){
        return $this->entityManager->getRepository('FaultyProductBundle:Faulty')->findBy($criteres, $order);
    }

    public function findBySupplierStatus(Supplier $supplier, $status){
        $q = $this->entityManager->createQueryBuilder();
        $q->select('f')
            ->from('FaultyProductBundle:Faulty', 'f')
            ->leftJoin('f.product', 'p')
            ->leftJoin('p.supplier', 's')
            ->where('s.id = :id')
            ->andWhere('f.status = :status')
            ->setParameter(':id', $supplier->getId())
            ->setParameter(':status', $status)
        ;

        $faulties = $q->getQuery()->getResult();

        return $faulties;
    }

    /**
     * @return Faulty[]
     */
    public function findByLastReception(){

        $date = new \DateTime();
        $today = $date->format('Y-m-d');

        $q = $this->entityManager->createQueryBuilder();
        $q->select('f')
            ->from('FaultyProductBundle:Faulty', 'f')
            ->leftJoin('f.product', 'p')
            ->leftJoin('p.supplier', 's')
            ->where('f.reception = 1')
            ->andWhere('f.createdAt >= :date_min')
            ->andWhere('f.createdAt <= :date_max')
            ->setParameter(':date_min', $today.' 00:00:00')
            ->setParameter(':date_max', $today.' 23:59:59')
        ;

        $faulties = $q->getQuery()->getResult();

        return $faulties;
    }

    public function csv(){
        $q = $this->entityManager->createQueryBuilder();
        $q->select('p.idPrestashopProduct', 'p.name as product_name', 'p.quantity', 's.name as supplier_name', 'f.status', 'f.reason')
            ->from('FaultyProductBundle:Faulty', 'f')
            ->leftJoin('f.product', 'p')
            ->leftJoin('p.supplier', 's')
            ->where('p.location = :loaction')
            ->setParameter(':loaction', 'at_warehouse')
        ;

        $faulties = $q->getQuery()->getArrayResult();

        return $faulties;
    }

    public function save(Faulty $faulty){
        $this->entityManager->persist($faulty);
        $this->entityManager->flush();
    }

    public function delete(Faulty $faulty){
        $this->entityManager->remove($faulty);
        $this->entityManager->flush();
    }
}