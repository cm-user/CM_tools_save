<?php

namespace MarketingBundle\Repository;
use Doctrine\ORM\EntityManager;
use MarketingBundle\Entity\Newsletter;
use MarketingBundle\Entity\NewsletterProduct;

class NewsletterRepository
{
    private $entityManager;

    public function __construct(EntityManager $entityManager){
        $this->entityManager = $entityManager;
    }

    public function findAll(){
        return $this->entityManager->getRepository('MarketingBundle:Newsletter')->findAll();
    }

    public function findAllOrderByDate(){
        return $this->entityManager->getRepository('MarketingBundle:Newsletter')->findBy([], ["createdAt"=>"DESC"]);
    }

    public function save(Newsletter $newsletter){
        $this->entityManager->persist($newsletter);
        $newsletter->getNewsletterHeader()->setNewsletter($newsletter);
        $this->entityManager->persist($newsletter->getNewsletterHeader());
        $i=0;
        foreach ($newsletter->getNewsletterMenu() as $item) {
            $item->setNewsletter($newsletter);
            $item->setPosition($i);
            $this->entityManager->persist($item);
            $i++;
        }
        foreach ($newsletter->getNewsletterBlock() as $item) {
            $i = 0;
            foreach ($item->getNewsletterProduct() as $value) {
                $value->setPosition($i);
                $value->setNewsletterBlock($item);
                $this->entityManager->persist($value);
                $i++;
            }
            $item->setNewsletter($newsletter);
            $this->entityManager->persist($item);
        }
        $this->entityManager->flush();
    }

    public function delete(Newsletter $newsletter){
        $this->entityManager->remove($newsletter);
        $this->entityManager->flush();
    }
}
