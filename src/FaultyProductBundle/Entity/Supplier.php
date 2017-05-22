<?php

namespace FaultyProductBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Supplier
 *
 * @ORM\Table(name="faulty_product_supplier")
 * @ORM\Entity
 */
class Supplier
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    protected $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_prestashop_supplier", type="integer", nullable=true)
     */
    protected $idPrestashopSupplier;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="FaultyProductBundle\Entity\Product", mappedBy="supplier")
     */
    protected $products;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getIdPrestashopSupplier()
    {
        return $this->idPrestashopSupplier;
    }

    /**
     * @param int $idPrestashopSupplier
     */
    public function setIdPrestashopSupplier($idPrestashopSupplier)
    {
        $this->idPrestashopSupplier = $idPrestashopSupplier;
    }

    /**
     * @return ArrayCollection
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param ArrayCollection $products
     */
    public function setProducts($products)
    {
        $this->products = $products;
    }


}