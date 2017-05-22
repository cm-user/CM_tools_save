<?php

namespace MarketingBundle\Entity;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Mapping as ORM;

/**
 * NewsletterHeader
 *
 * @ORM\Table(name="newsletter_header")
 * @ORM\Entity
 */
class NewsletterHeader
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="text_top", type="string", length=255)
     */
    private $textTop;

    /**
     * @var string
     *
     * @ORM\Column(name="text_intro", type="string", length=255)
     */
    private $textIntro;

    /**
     * @var string
     *
     * @ORM\Column(name="text_description", type="text")
     */
    private $textDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @var UploadedFile
     */
    private $filePicture;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=true)
     */
    private $link;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime")
     */
    private $updatedAt;

    // Mapping
    /**
     * @var Newsletter
     *
     * @ORM\OneToOne(targetEntity="MarketingBundle\Entity\Newsletter", inversedBy="newsletterHeader")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="newsletter_id", referencedColumnName="id", unique=true)
     * })
     */
    private $newsletter;

    // Form
    public $displayBanner;


    public function __construct()
    {
        $this->updatedAt = new \DateTime();
    }
    
    public function processBanner(ContainerInterface $container){
        $repository = $container->get('marketingbundle.repository.newsletter.header');
        $folderImg = $container->getParameter('folder_img');
        $folderUpload = $container->getParameter('folder_upload');
        $urlImg = $container->getParameter('url_img');

        if($this->isUploadFile()){
            $imageName = explode("/", $this->getPicture());
            $imageName = $imageName[(sizeof($imageName)-1)];
            $imagePath = $folderUpload.$imageName;
            $imageSavePath = $folderImg.$imageName;
            $image = $container->get('image.handling')->open($imagePath);
            $image->resize(800, 200)->saveJpeg($imageSavePath, 90)->applyOperations();
            $this->setPicture($urlImg.$imageName);
            $repository->save($this);
            unset($image);
        }
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
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Set idNewsletter
     *
     * @param integer $newsletter
     *
     * @return NewsletterHeader
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * Get Newsletter
     *
     * @return Newsletter
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * Set textTop
     *
     * @param string $textTop
     *
     * @return NewsletterHeader
     */
    public function setTextTop($textTop)
    {
        $this->textTop = $textTop;

        return $this;
    }

    /**
     * Get textTop
     *
     * @return string
     */
    public function getTextTop()
    {
        return $this->textTop;
    }

    /**
     * Set textIntro
     *
     * @param string $textIntro
     *
     * @return NewsletterHeader
     */
    public function setTextIntro($textIntro)
    {
        $this->textIntro = $textIntro;

        return $this;
    }

    /**
     * Get textIntro
     *
     * @return string
     */
    public function getTextIntro()
    {
        return $this->textIntro;
    }

    /**
     * Set textDescription
     *
     * @param string $textDescription
     *
     * @return NewsletterHeader
     */
    public function setTextDescription($textDescription)
    {
        $this->textDescription = $textDescription;

        return $this;
    }

    /**
     * Get textDescription
     *
     * @return string
     */
    public function getTextDescription()
    {
        return $this->textDescription;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return NewsletterHeader
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
     * Set link
     *
     * @param string $link
     *
     * @return NewsletterHeader
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
}

