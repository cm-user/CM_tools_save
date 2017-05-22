<?php

namespace FaultyProductBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Unicorn\Bundle\UserBundle\Entity\User as UnicornUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User extends UnicornUser
{
    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="FaultyProductBundle\Entity\Faulty", mappedBy="user")
     */
    protected $faultys;
}

