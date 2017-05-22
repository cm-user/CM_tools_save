<?php

namespace MailSignatureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * MailSignature
 */
class MailSignature
{
    /**
     * @var string
     */
    protected $url;

    /**
     * @var UploadedFile
     */
    protected $filePicture;

    /**
     * @var string
     */
    protected $picture;

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return UploadedFile
     */
    public function getFilePicture()
    {
        return $this->filePicture;
    }

    /**
     * @param UploadedFile $filePicture
     */
    public function setFilePicture($filePicture)
    {
        $this->filePicture = $filePicture;
    }

    /**
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param string $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }


}