<?php

namespace MarketingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewsletterMenu
 *
 * @ORM\Table(name="newsletter_menu")
 * @ORM\Entity
 */
class NewsletterMenu
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
     * @ORM\Column(name="link", type="string", length=255)
     */
    private $link;

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer", nullable=true)
     */
    private $position;
    
    // Mapping
    /**
     * @var Newsletter
     *
     * @ORM\ManyToOne(targetEntity="MarketingBundle\Entity\Newsletter", inversedBy="newsletterMenu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="newsletter_id", referencedColumnName="id")
     * })
     */
    private $newsletter;


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
     * @return NewsletterMenu
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
     * @return NewsletterMenu
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
     * Set link
     *
     * @param string $link
     *
     * @return NewsletterMenu
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
     * Set position
     *
     * @param integer $position
     *
     * @return NewsletterMenu
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
}

