<?php

namespace ShopBundle\Repository;


use Doctrine\ORM\EntityManager;
use ShopBundle\Entity\CarouselPicture;
use ShopBundle\Entity\CarouselVideo;

class CarouselVideoRepository
{
    private $entityManager;

    public function __construct(EntityManager $entityManager){
        $this->entityManager = $entityManager;
    }

    /**
     * @return array|CarouselVideo[]
     */
    public function findAll(){
        return $this->entityManager->getRepository('ShopBundle:CarouselVideo')->findAll();
    }

    /**
     * @return array|CarouselVideo[]
     */
    public function findToday(){
        return $this->entityManager->createQueryBuilder('cv')
            ->select('cv')
            ->from('ShopBundle:CarouselVideo', 'cv')
            ->where('cv.dateStart <= CURRENT_DATE()')
            ->andWhere('cv.dateEnd >= CURRENT_DATE()')
            ->orWhere('cv.dateStart IS NULL AND cv.dateEnd IS NULL')
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * @return array
     */
    public function findTodayArray(){
        return $this->entityManager->createQueryBuilder('cv')
            ->select('cv.id', 'cv.name', 'cv.position', 'cv.type')
            ->from('ShopBundle:CarouselVideo', 'cv')
            ->where('cv.dateStart <= CURRENT_DATE()')
            ->andWhere('cv.dateEnd >= CURRENT_DATE()')
            ->orWhere('cv.dateStart IS NULL AND cv.dateEnd IS NULL')
            ->getQuery()
            ->getResult()
        ;
    }

    public function setPosition($id, $position){
        $this->entityManager->createQueryBuilder('cv')
            ->update('ShopBundle:CarouselVideo', 'cv')
            ->set('cv.position', $position)
            ->where('cv.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->execute()
        ;
    }

    public function save(CarouselVideo $carouselVideo){
        $this->entityManager->persist($carouselVideo);
        $this->entityManager->flush();
    }

    public function delete(CarouselVideo $carouselVideo){
        $this->entityManager->remove($carouselVideo);
        $this->entityManager->flush();
    }
}