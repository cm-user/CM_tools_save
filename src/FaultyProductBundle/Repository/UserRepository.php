<?php

namespace FaultyProductBundle\Repository;

use Unicorn\Bundle\UserBundle\Repository\UserRepository as UnicornUserRepository;


class UserRepository extends UnicornUserRepository
{
    public function supportsClass($class)
    {
        return $class === '\FaultyProductBundle\Entity\User';
    }
}