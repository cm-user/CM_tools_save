<?php

namespace ShopBundle\Repository;

use Doctrine\ORM\EntityManager;
use ShopBundle\Entity\ShopConfiguration;

/**
 * ShopConfiguration repository.
 *
 * @package ShopBundle\Repository
 */
class ShopConfigurationRepository
{
	private $_em;

	/**
	 * ShopConfigurationRepository constructor.
	 *
	 * @param EntityManager $entityManager
	 */
	public function __construct(EntityManager $entityManager){
        $this->_em = $entityManager;
	}

	/**
	 * @return array|ShopConfiguration[]
	 */
	public function findAll(){
		return $this->_em->getRepository('ShopBundle:ShopConfiguration')->findAll();
	}

	/**
	 * @return ShopConfiguration
	 */
	public function findById($id){
		return $this->_em->getRepository('ShopBundle:ShopConfiguration')->find($id);
	}

	public function save(ShopConfiguration $shopConfiguration){
		$this->_em->persist($shopConfiguration);
		$this->_em->flush();
	}

	public function delete(ShopConfiguration $shopConfiguration){
		$this->_em->remove($shopConfiguration);
		$this->_em->flush();
	}
}