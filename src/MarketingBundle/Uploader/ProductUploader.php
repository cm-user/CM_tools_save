<?php

namespace MarketingBundle\Uploader;


use Symfony\Component\HttpFoundation\File\UploadedFile;

class ProductUploader extends FileUploader
{
    public function upload(UploadedFile $file)
    {
        $this->ext = 'product';
        return parent::upload($file);
    }
}