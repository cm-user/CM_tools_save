<?php

namespace CM\ServiceClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Mail
 *
 * @ORM\Entity
 * @ORM\Table(name="sc_mail")
 */
class Mail
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="text_mail", type="text")
     */
    private $textMail;

    /**
     * @var Solution
     * @ORM\ManyToOne(targetEntity="CM\ServiceClientBundle\Entity\Solution", inversedBy="mails", cascade={"persist"})
     * @ORM\JoinColumn(name="solution_id", referencedColumnName="id", nullable=true)
     */
    protected $solution;

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
     * Set textMail
     *
     * @param string $textMail
     *
     * @return Mail
     */
    public function setTextMail($textMail)
    {
        $this->textMail = $textMail;

        return $this;
    }

    /**
     * Get textMail
     *
     * @return string
     */
    public function getTextMail()
    {
        return $this->textMail;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Mail
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get textMail
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }


    
    /**
     * Set solution
     *
     * @param \CM\ServiceClientBundle\Entity\Solution $solution
     *
     * @return Mail
     */
    public function setSolution(\CM\ServiceClientBundle\Entity\Solution $solution = null)
    {
        $this->solution = $solution;

        return $this;
    }

    /**
     * Get solution
     *
     * @return \CM\ServiceClientBundle\Entity\Solution
     */
    public function getSolution()
    {
        return $this->solution;
    }
}
