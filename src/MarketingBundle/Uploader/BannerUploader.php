<?php

namespace MarketingBundle\Uploader;


use Symfony\Component\HttpFoundation\File\UploadedFile;

class BannerUploader extends FileUploader
{
    public function upload(UploadedFile $file)
    {
        $this->ext = 'banner';
        return parent::upload($file);
    }
}