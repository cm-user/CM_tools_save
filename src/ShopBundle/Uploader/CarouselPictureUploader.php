<?php

namespace ShopBundle\Uploader;


use Symfony\Component\HttpFoundation\File\UploadedFile;

class CarouselPictureUploader extends FileUploader
{
    public function upload(UploadedFile $file)
    {
        return parent::upload($file);
    }
}