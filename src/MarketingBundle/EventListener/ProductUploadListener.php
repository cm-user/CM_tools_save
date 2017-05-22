<?php

namespace MarketingBundle\EventListener;


use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use MarketingBundle\Entity\NewsletterProduct;
use MarketingBundle\Uploader\ProductUploader;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Class ProductUploadListener
 * Event listener de l'upload d'image de produit
 * @package MarketingBundle\EventListener
 */
class ProductUploadListener
{
    private $uploader;
    private $container;

    public function __construct(ProductUploader $uploader, Container $container)
    {
        $this->uploader = $uploader;
        $this->container = $container;
    }

    public function prePersist(LifecycleEventArgs $args){
        $entity = $args->getEntity();
        $this->uploadFile($entity);
    }

    public function preUpdate(PreUpdateEventArgs $args){
        $entity = $args->getEntity();
        $this->uploadFile($entity);
    }

    private function uploadFile($entity){
        // upload only works for Product entities
        if (!$entity instanceof NewsletterProduct) {
            return;
        }

        $file = $entity->getFilePicture();

        // only upload new files
        if (!$file instanceof UploadedFile) {
            return;
        }

        $fileName = $this->uploader->upload($file);
        $entity->setPicture($this->container->getParameter('url_upload').$fileName);
    }


}