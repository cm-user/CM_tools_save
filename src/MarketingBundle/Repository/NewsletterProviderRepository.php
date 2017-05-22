<?php

namespace MarketingBundle\Repository;
use Doctrine\ORM\EntityManager;
use MarketingBundle\Entity\NewsletterProvider;

/**
 * NewsletterProviderRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NewsletterProviderRepository
{
    private $entityManager;

    public function __construct(EntityManager $entityManager){
        $this->entityManager = $entityManager;
    }

    public function findAll(){
        return $this->entityManager->getRepository('MarketingBundle:NewsletterProvider')->findAll();
    }

    public function save(NewsletterProvider $newsletterProvider){
        $this->entityManager->persist($newsletterProvider);
        $this->entityManager->flush();
    }

    public function delete(NewsletterProvider $newsletterProvider){
        $this->entityManager->remove($newsletterProvider);
        $this->entityManager->flush();
    }
}
