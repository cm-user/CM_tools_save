<?php

namespace ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopConfiguration
 *
 * @ORM\Entity
 * @ORM\Table(name="carousel_shop")
 */
class ShopConfiguration
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string")
     */
    protected $name;

    /**
     * @var int
     *
     * @ORM\Column(name="width", type="string")
     */
    protected $width;

    /**
     * @var int
     *
     * @ORM\Column(name="height", type="string")
     */
    protected $height;

    /**
     * @var int
     *
     * @ORM\Column(name="show_video", type="integer")
     */
    protected $showVideo = false;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function isShowVideo()
    {
        return $this->showVideo;
    }

    /**
     * @param int $showVideo
     */
    public function setShowVideo($showVideo)
    {
        $this->showVideo = $showVideo;
    }
}