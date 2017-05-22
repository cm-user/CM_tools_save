<?php

namespace ShopBundle\EventListener;


use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use ShopBundle\Entity\CarouselPicture;
use ShopBundle\Uploader\CarouselPictureUploader;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Class CarouselPictureListener
 * Event listener de l'upload d'image
 * @package ShopBundle\EventListener
 */
class CarouselPictureListener
{
    private $uploader;
    private $container;

    public function __construct(CarouselPictureUploader $uploader, Container $container)
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
        if (!$entity instanceof CarouselPicture) {
            return;
        }

        $file = $entity->getFilePicture();

        // only upload new files
        if (!$file instanceof UploadedFile) {
            return;
        }

        $fileName = $this->uploader->upload($file);
        $entity->setPicture($this->container->getParameter('url_upload_image_carousel').$fileName);
        $entity->setFilePicture(null);
    }
}