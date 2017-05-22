<?php

namespace MarketingBundle\Entity;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Mapping as ORM;

/**
 * NewsletterProduct
 *
 * @ORM\Table(name="newsletter_product")
 * @ORM\Entity
 */
class NewsletterProduct
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer")
     */
    private $position;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_prestashop_product", type="integer")
     */
    private $idPrestashopProduct;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_prestashop_default_image", type="integer")
     */
    private $idPrestashopDefaultImage;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=255)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="price_old", type="string", length=255)
     */
    private $priceOld;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255)
     */
    private $picture;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="css_title", type="string", length=40)
     */
    private $cssTitle;

    /**
     * @var UploadedFile
     */
    private $filePicture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $search;

    /**
     * @var string
     */
    private $searchButton;

    // Mapping
    /**
     * @var NewsletterBlock
     *
     * @ORM\ManyToOne(targetEntity="MarketingBundle\Entity\NewsletterBlock", inversedBy="newsletterProduct")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="newsletter_block_id", referencedColumnName="id")
     * })
     */
    private $newsletterBlock;
    
    public function __construct()
    {
        $this->updatedAt = new \DateTime();
    }
    
    public function isUploadFile(){
        return preg_match('#/upload/#is', $this->getPicture());
    }
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idNewsletterBlock
     *
     * @param integer $newsletterBlock
     *
     * @return NewsletterProduct
     */
    public function setNewsletterBlock($newsletterBlock)
    {
        $this->newsletterBlock = $newsletterBlock;

        return $this;
    }

    /**
     * Get idNewsletterBlock
     *
     * @return NewsletterBlock
     */
    public function getNewsletterBlock()
    {
        return $this->newsletterBlock;
    }

    /**
     * Set position
     *
     * @param integer $position
     *
     * @return NewsletterProduct
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set idPrestashopProduct
     *
     * @param integer $idPrestashopProduct
     *
     * @return NewsletterProduct
     */
    public function setIdPrestashopProduct($idPrestashopProduct)
    {
        $this->idPrestashopProduct = $idPrestashopProduct;

        return $this;
    }

    /**
     * Get idPrestashopProduct
     *
     * @return int
     */
    public function getIdPrestashopProduct()
    {
        return $this->idPrestashopProduct;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return NewsletterProduct
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return NewsletterProduct
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set priceOld
     *
     * @param string $priceOld
     *
     * @return NewsletterProduct
     */
    public function setPriceOld($priceOld)
    {
        $this->priceOld = $priceOld;

        return $this;
    }

    /**
     * Get priceOld
     *
     * @return string
     */
    public function getPriceOld()
    {
        return $this->priceOld;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return NewsletterProduct
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return NewsletterProduct
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
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
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return string
     */
    public function getCssTitle()
    {
        return $this->cssTitle;
    }

    /**
     * @param string $cssTitle
     */
    public function setCssTitle($cssTitle)
    {
        $this->cssTitle = $cssTitle;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getSearchButton()
    {
        return $this->searchButton;
    }

    /**
     * @param string $searchButton
     */
    public function setSearchButton($searchButton)
    {
        $this->searchButton = $searchButton;
    }
}

