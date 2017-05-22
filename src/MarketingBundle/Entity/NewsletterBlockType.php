<?php

namespace MarketingBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Finder\Finder;
use Doctrine\ORM\Mapping as ORM;

/**
 * NewsletterBlockType
 *
 * @ORM\Table(name="newsletter_block_type")
 * @ORM\Entity
 */
class NewsletterBlockType
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
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;
    
    // Mapping
    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="MarketingBundle\Entity\NewsletterBlock", mappedBy="newsletterBlockType", cascade={"all"})
     */
    private $newsletterBlock;

    public static function getBlockTypePath(){
        $finder = new Finder();
        $finder->name('*.block.html');
        $finder->files()->in(__DIR__.'/../Resources/views/inky/');
        $fileList = [];
        foreach ($finder as $file) {
            $fileList[$file->getFilename()] = '@Marketing/inky/'.$file->getFilename();
        }
        return $fileList;
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
     * @return NewsletterBlockType
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
     * Set path
     *
     * @param string $path
     *
     * @return NewsletterBlockType
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return mixed
     */
    public function getNewsletterBlock()
    {
        return $this->newsletterBlock;
    }

    /**
     * @param mixed $newsletterBlock
     */
    public function setNewsletterBlock($newsletterBlock)
    {
        $this->newsletterBlock = $newsletterBlock;
    }
}

