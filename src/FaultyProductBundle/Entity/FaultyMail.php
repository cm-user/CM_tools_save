<?php
/**
 * Created by PhpStorm.
 * User: Rémy
 * Date: 15/02/2017
 * Time: 13:58
 */

namespace FaultyProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Faulty
 *
 * @ORM\Table(name="faulty_mail")
 * @ORM\Entity
 */
class FaultyMail
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
     * @ORM\Column(name="mail", type="string")
     */
    protected $mail;

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
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param string $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }
}