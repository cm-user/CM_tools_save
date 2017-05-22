<?php

namespace ShopBundle\Repository;


use Doctrine\ORM\EntityManager;
use ShopBundle\Entity\CarouselPicture;

class CarouselPictureRepository
{
    private $entityManager;

    public function __construct(EntityManager $entityManager){
        $this->entityManager = $entityManager;
    }

    /**
     * @return array|CarouselPicture[]
     */
    public function findAll(){
        return $this->entityManager->getRepository('ShopBundle:CarouselPicture')->findAll();
    }

    /**
     * @return array|CarouselPicture[]
     */
    public function findToday(){
        return $this->entityManager->createQueryBuilder('cp')
            ->select('cp')
            ->from('ShopBundle:CarouselPicture', 'cp')
            ->where('cp.dateStart <= CURRENT_DATE()')
            ->andWhere('cp.dateEnd >= CURRENT_DATE()')
            ->orWhere('cp.dateStart IS NULL AND cp.dateEnd IS NULL')
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * @return array
     */
    public function findTodayArray(){
        return $this->entityManager->createQueryBuilder('cp')
            ->select('cp.id', 'cp.name', 'cp.position', 'cp.type')
            ->from('ShopBundle:CarouselPicture', 'cp')
            ->where('cp.dateStart <= CURRENT_DATE()')
            ->andWhere('cp.dateEnd >= CURRENT_DATE()')
            ->orWhere('cp.dateStart IS NULL AND cp.dateEnd IS NULL')
            ->getQuery()
            ->getResult()
        ;
    }

    public function setPosition($id, $position){
        $this->entityManager->createQueryBuilder('cp')
            ->update('ShopBundle:CarouselPicture', 'cp')
            ->set('cp.position', $position)
            ->where('cp.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->execute()
        ;
    }

    public function save(CarouselPicture $carouselPicture){
        $this->entityManager->persist($carouselPicture);
        $this->entityManager->flush();
    }

    public function delete(CarouselPicture $carouselPicture){
        $this->entityManager->remove($carouselPicture);
        $this->entityManager->flush();
    }
}