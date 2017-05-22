<?php

namespace FaultyProductBundle\Repository;


use Doctrine\ORM\EntityManager;
use FaultyProductBundle\Entity\Supplier;

class SupplierRepository
{
    private $entityManager;

    public function __construct(EntityManager $entityManager){
        $this->entityManager = $entityManager;
    }

    public function findByIdPrestashopSupplier($id){
        return $this->entityManager->getRepository('FaultyProductBundle:Supplier')->findOneBy(['idPrestashopSupplier' => $id]);
    }

    public function findAll(){
        return $this->entityManager->getRepository('FaultyProductBundle:Supplier')->findAll();
    }

    public function findLast3Month(){
        $dateEnd = new \DateTime();
        $dateStart = clone $dateEnd;
        $dateStart->sub(new \DateInterval("P3M"));

        $q = $this->entityManager->createQueryBuilder();
        $q->select('s')
            ->from('FaultyProductBundle:Supplier', 's')
            ->leftJoin('s.products', 'p')
            ->leftJoin('p.faulty', 'f')
            ->where('f.createdAt >= :dateStart')
            ->orderBy('s.name')
        ;

        $q->setParameters([
            'dateStart' => $dateStart->format('Y-m-d'),
        ]);

        $r = $q->getQuery()->getResult();

        return $r;
    }

    public function findCamalo(){

        $q = $this->entityManager->createQueryBuilder();
        $q->select('s', 'p', 'i', 'f', 'u')
            ->from('FaultyProductBundle:Supplier', 's')
            ->leftJoin('s.products', 'p')
            ->leftJoin('p.productImages', 'i')
            ->leftJoin('p.faulty', 'f')
            ->leftJoin('f.user', 'u')
            ->where('p.location like :location')
            ->orWhere('p.location IS NULL')
            ->orderBy('s.name')
            ->addOrderBy('p.name')
            ->addOrderBy('f.status')
        ;

        $q->setParameters([
            'location' => 'at_warehouse',
        ]);

        $r = $q->getQuery()->getArrayResult();

        return $r;
    }

    public function findLast3MonthByStatus($status){
        $dateEnd = new \DateTime();
        $dateStart = clone $dateEnd;
        $dateStart->sub(new \DateInterval("P3M"));

        $q = $this->entityManager->createQueryBuilder();
        $q->select('s')
            ->from('FaultyProductBundle:Supplier', 's')
            ->leftJoin('s.products', 'p')
            ->leftJoin('p.faulty', 'f')
            ->where('f.createdAt >= :dateStart')
            ->andWhere('f.status = :status')
            ->orderBy('s.name')
        ;

        $q->setParameters([
            'dateStart' => $dateStart->format('Y-m-d'),
            'status' => $status,
        ]);

        $r = $q->getQuery()->getResult();

        return $r;
    }

    public function save(Supplier $supplier){
        $this->entityManager->persist($supplier);
        $this->entityManager->flush();
    }

    public function delete(Supplier $supplier){
        $this->entityManager->remove($supplier);
        $this->entityManager->flush();
    }
}