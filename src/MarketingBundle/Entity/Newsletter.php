<?php

namespace MarketingBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Newsletter
 * @ORM\Table(name="newsletter")
 * @ORM\Entity
 */
class Newsletter
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
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime")
     */
    private $updatedAt;

    // Mapping
    /**
     * @var NewsletterHeader
     *
     * @ORM\OneToOne(targetEntity="MarketingBundle\Entity\NewsletterHeader", mappedBy="newsletter", cascade={"all"})
     */
    private $newsletterHeader;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="MarketingBundle\Entity\NewsletterMenu", mappedBy="newsletter", cascade={"all"})
     */
    private $newsletterMenu;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="MarketingBundle\Entity\NewsletterBlock", mappedBy="newsletter", cascade={"all"})
     */
    private $newsletterBlock;

    /**
     * @var ModelNewsletter
     *
     * @ORM\ManyToOne(targetEntity="MarketingBundle\Entity\ModelNewsletter", inversedBy="newsletter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="model_newsletter_id", referencedColumnName="id")
     * })
     */
    private $modelNewsletter;

    /**
     * Newsletter constructor.
     */
    public function __construct()
    {
        $this->updatedAt = new \DateTime();
        $this->newsletterBlock = new ArrayCollection();
        $this->newsletterMenu = new ArrayCollection();
    }

    public function addMenu($menus){
        $sizeMenu = sizeof($menus);
        for($i=0;$i<$sizeMenu;$i++){
            $this->newsletterMenu->add($menus[$i]);
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
     * @param integer $modelNewsletter
     *
     * @return Newsletter
     */
    public function setModelNewsletter($modelNewsletter)
    {
        $this->modelNewsletter = $modelNewsletter;

        return $this;
    }

    /**
     * Get idNewsletter
     *
     * @return ModelNewsletter
     */
    public function getModelNewsletter()
    {
        return $this->modelNewsletter;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Newsletter
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Newsletter
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt->format('Y-m-d');
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Newsletter
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt->format('Y-m-d');
    }

    /**
     * @return NewsletterBlock
     */
    public function getNewsletterBlock()
    {
        return $this->newsletterBlock;
    }

    /**
     * @param NewsletterBlock $newsletterBlock
     */
    public function setNewsletterBlock($newsletterBlock)
    {
        $this->newsletterBlock = $newsletterBlock;
    }

    /**
     * @return NewsletterHeader
     */
    public function getNewsletterHeader()
    {
        return $this->newsletterHeader;
    }

    /**
     * @param NewsletterHeader $newsletterHeader
     */
    public function setNewsletterHeader($newsletterHeader)
    {
        $this->newsletterHeader = $newsletterHeader;
    }

    /**
     * @return NewsletterMenu
     */
    public function getNewsletterMenu()
    {
        return $this->newsletterMenu;
    }

    /**
     * @param NewsletterMenu $newsletterMenu
     */
    public function setNewsletterMenu($newsletterMenu)
    {
        $this->newsletterMenu = $newsletterMenu;
    }   
    
}

