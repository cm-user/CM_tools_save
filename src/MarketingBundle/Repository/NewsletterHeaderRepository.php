<?php

namespace MarketingBundle\Repository;
use Doctrine\ORM\EntityManager;
use MarketingBundle\Entity\NewsletterHeader;

/**
 * NewsletterHeaderRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NewsletterHeaderRepository extends \Doctrine\ORM\EntityRepository
{
    private $entityManager;

    public function __construct(EntityManager $entityManager){
        $this->entityManager = $entityManager;
    }

    public function findAll(){
        return $this->entityManager->getRepository('MarketingBundle:NewsletterHeader')->findAll();
    }

    public function save(NewsletterHeader $newsletterHeader){
        $this->entityManager->persist($newsletterHeader);
        $this->entityManager->flush();
    }

    public function delete(NewsletterHeader $newsletterHeader){
        $this->entityManager->remove($newsletterHeader);
        $this->entityManager->flush();
    }
}
