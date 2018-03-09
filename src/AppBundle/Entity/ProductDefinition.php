<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductDefinition
 *
 * @ORM\Table(name="product_definition")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductDefinitionRepository")
 */
class ProductDefinition
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
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Product", mappedBy="definition")
     */
    private $product;

    /**
     * @var string
     *
     * @ORM\Column(name="definition", type="text")
     */
    private $definition;


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
     * Set product
     *
     * @param string $product
     *
     * @return ProductDefinition
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set definition
     *
     * @param string $definition
     *
     * @return ProductDefinition
     */
    public function setDefinition($definition)
    {
        $this->definition = $definition;

        return $this;
    }

    /**
     * Get definition
     *
     * @return string
     */
    public function getDefinition()
    {
        return $this->definition;
    }
}

