<?php

namespace MarketingBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Provider
 *
 * @ORM\Table(name="provider")
 * @ORM\Entity
 */
class Provider
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_default", type="boolean")
     */
    private $isDefault;
    
    // Mapping
    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="MarketingBundle\Entity\NewsletterProvider", mappedBy="provider", cascade={"remove"})
     */
    private $newsletterProvider;

    /**
     * Provider constructor.
     */
    public function __construct()
    {
        $this->newsletterProvider = new ArrayCollection();
    }

    public function getNewsletterProviderByName($name){
        foreach ($this->newsletterProvider as $s) {
            if($s->getName() == $name){
                return $s->getValue();
            }
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
     * Set name
     *
     * @param string $name
     *
     * @return Provider
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set isDefault
     *
     * @param boolean $isDefault
     *
     * @return Provider
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;

        return $this;
    }

    /**
     * Get isDefault
     *
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * @return mixed
     */
    public function getNewsletterProvider()
    {
        return $this->newsletterProvider;
    }

    /**
     * @param mixed $newsletterProvider
     */
    public function setNewsletterProvider($newsletterProvider)
    {
        $this->newsletterProvider = $newsletterProvider;
    }
}

