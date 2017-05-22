<?php

namespace FaultyProductBundle\Uploader;


use Symfony\Component\HttpFoundation\File\UploadedFile;

class ProductImageUploader extends FileUploader
{
    public function upload(UploadedFile $file)
    {
        return parent::upload($file);
    }
}