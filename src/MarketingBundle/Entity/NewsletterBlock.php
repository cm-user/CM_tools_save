<?php

namespace MarketingBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Filesystem\Filesystem;
use Doctrine\ORM\Mapping as ORM;

/**
 * NewsletterBlock
 *
 * @ORM\Table(name="newsletter_block")
 * @ORM\Entity
 */
class NewsletterBlock
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
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="css_title", type="string", length=40, nullable=true)
     */
    private $cssTitle;
    
    // Mapping
    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="MarketingBundle\Entity\NewsletterProduct", mappedBy="newsletterBlock", cascade={"all"})
     */
    private $newsletterProduct;

    /**
     * @var NewsletterBlockType
     *
     * @ORM\ManyToOne(targetEntity="MarketingBundle\Entity\NewsletterBlockType", inversedBy="newsletterBlock")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="newsletter_block_type_id", referencedColumnName="id")
     * })
     */
    private $newsletterBlockType;

    /**
     * @var Newsletter
     *
     * @ORM\ManyToOne(targetEntity="MarketingBundle\Entity\Newsletter", inversedBy="newsletterBlock")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="newsletter_id", referencedColumnName="id")
     * })
     */
    private $newsletter;
    
    public function __construct()
    {
        $this->newsletterProduct = new ArrayCollection();
    }

    public function processPictureProduct(ContainerInterface $container){
        $fs = new Filesystem();
        $repository = $container->get('marketingbundle.repository.newsletter.product');
        $folderImg = $container->getParameter('folder_img');
        $folderUpload = $container->getParameter('folder_upload');
        $urlImg = $container->getParameter('url_img');
        
        $sizeNewsletterProduct = sizeof($this->getNewsletterProduct());
        for($i=0;$i<$sizeNewsletterProduct;$i++){
            $p = $this->getNewsletterProduct()[$i];

            if($p->isUploadFile()){
                $imageName = explode("/", $p->getPicture());
                $imageName = $imageName[(sizeof($imageName)-1)];
                $imagePath = $folderUpload.$imageName;
                $imageSavePath = $folderImg.$imageName;
                $image = $container->get('image.handling')->open($imagePath);
            }else{
                $imageName = $p->getIdPrestashopProduct().'_'.$p->getIdPrestashopDefaultImage();
                if($sizeNewsletterProduct == 2){
                    $imageName .= '_big.jpg';
                }else{
                    $imageName .= '.jpg';
                }
                $imageSavePath = $folderImg.$imageName;
            }
            if(!$fs->exists($imageSavePath)){
                if(!isset($image)){
                    $image = $container->get('image.handling')->open($imageSavePath)->fromData(file_get_contents($p->getPicture()));
                }
                if($sizeNewsletterProduct == 2){
                    $image->zoomCrop(408, 280)->saveJpeg($imageSavePath, 90)->applyOperations();
                }else{
                    $image->resize(267, 267)->saveJpeg($imageSavePath, 90)->applyOperations();
                }
            }

            $p->setPicture($urlImg.$imageName);
            $repository->save($p);
            unset($image);
        }
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
     * Set idNewsletter
     *
     * @param integer $newsletter
     *
     * @return NewsletterBlock
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * Get idNewsletter
     *
     * @return int
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return NewsletterBlock
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
     * @return ArrayCollection
     */
    public function getNewsletterProduct()
    {
        return $this->newsletterProduct;
    }

    /**
     * @param ArrayCollection $newsletterProduct
     */
    public function setNewsletterProduct($newsletterProduct)
    {
        $this->newsletterProduct = $newsletterProduct;
    }

    /**
     * @return NewsletterBlockType
     */
    public function getNewsletterBlockType()
    {
        return $this->newsletterBlockType;
    }

    /**
     * @param mixed $newsletterBlockType
     */
    public function setNewsletterBlockType($newsletterBlockType)
    {
        $this->newsletterBlockType = $newsletterBlockType;
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
}

