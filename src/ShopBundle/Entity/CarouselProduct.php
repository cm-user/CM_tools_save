<?php

namespace ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Entity
 * @ORM\Table(name="carousel_product")
 */
class CarouselProduct
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_prestashop_product", type="integer", nullable=true)
     */
    protected $idPrestashopProduct;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_prestashop_default_image", type="integer")
     */
    protected $idPrestashopDefaultImage;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255)
     */
    protected $picture;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=255)
     */
    protected $price;

    /**
     * @var string
     *
     * @ORM\Column(name="price_old", type="string", length=255)
     */
    protected $priceOld;

    /**
     * @var string
     */
    protected $search;

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
    public function getIdPrestashopProduct()
    {
        return $this->idPrestashopProduct;
    }

    /**
     * @param int $idPrestashopProduct
     */
    public function setIdPrestashopProduct($idPrestashopProduct)
    {
        $this->idPrestashopProduct = $idPrestashopProduct;
    }

    /**
     * @return int
     */
    public function getIdPrestashopDefaultImage()
    {
        return $this->idPrestashopDefaultImage;
    }

    /**
     * @param int $idPrestashopDefaultImage
     */
    public function setIdPrestashopDefaultImage($idPrestashopDefaultImage)
    {
        $this->idPrestashopDefaultImage = $idPrestashopDefaultImage;
    }

    /**
     * @return string
     */
    public function getPicture()
    {
        return str_replace('thickbox_default', 'bigger_thickbox', $this->picture);
    }

    /**
     * @param string $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    /**
     * @return string
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * @param string $search
     */
    public function setSearch($search)
    {
        $this->search = $search;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getPriceOld()
    {
        return $this->priceOld;
    }

    /**
     * @param string $priceOld
     */
    public function setPriceOld($priceOld)
    {
        $this->priceOld = $priceOld;
    }


}