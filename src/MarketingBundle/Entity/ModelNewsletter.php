<?php

namespace MarketingBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Finder\Finder;
use Doctrine\ORM\Mapping as ORM;

/**
 * ModelNewsletter
 * @ORM\Table(name="model_newsletter")
 * @ORM\Entity
 */
class ModelNewsletter
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
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="path_css", type="string", length=255)
     */
    private $pathCss;

    /**
     * @var Shop
     */
    private $shop;

    // Mapping
    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Newsletter", mappedBy="modelNewsletter", cascade={"remove"})
     */
    private $newsletter;

    /**
     * ModelNewsletter constructor.
     */
    public function __construct()
    {
        $this->newsletter = new ArrayCollection();
    }

    public static function getModelNewsletterPath(){
        $finder = new Finder();
        $finder->name('*.model.html');
        $finder->files()->in(__DIR__.'/../Resources/views/inky/');
        $fileList = [];
        foreach ($finder as $file) {
            $fileList[$file->getFilename()] = '@Marketing/inky/'.$file->getFilename();
        }
        return $fileList;
    }

    public static function getModelNewsletterCssPath(){
        $finder = new Finder();
        $finder->name('*.css');
        $finder->files()->in(__DIR__.'/../Resources/public/css/inky/');
        $fileList = [];
        foreach ($finder as $file) {
            $fileList[$file->getFilename()] = $file->getPathname();
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
     * Set idShop
     *
     * @param integer $shop
     *
     * @return ModelNewsletter
     */
    public function setShop($shop)
    {
        $this->shop = $shop;

        return $this;
    }

    /**
     * Get idShop
     *
     * @return Shop
     */
    public function getShop()
    {
        return $this->shop;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return ModelNewsletter
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
     * @return ModelNewsletter
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
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * @param mixed $newsletter
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;
    }

    /**
     * @return string
     */
    public function getPathCss()
    {
        return $this->pathCss;
    }

    /**
     * @param string $pathCss
     */
    public function setPathCss($pathCss)
    {
        $this->pathCss = $pathCss;
    }
}

