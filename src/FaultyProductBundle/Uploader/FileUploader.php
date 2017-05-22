<?php

namespace FaultyProductBundle\Uploader;


use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileUploader
{
    private $targetDir;
    protected $ext;

    public function __construct($targetDir)
    {
        $this->targetDir = $targetDir;
    }

    public function upload(UploadedFile $file){
        if($this->ext){
            $fileName = md5(uniqid()).'.'.$this->ext.'.'.$file->getClientOriginalExtension();
        }else{
            $fileName = md5(uniqid()).'.'.$file->getClientOriginalExtension();
        }

        $file->move($this->targetDir, $fileName);

        return $fileName;
    }
}