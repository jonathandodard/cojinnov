<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * productPrice
 *
 * @ORM\Table(name="product_price")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\productPriceRepository")
 */
class productPrice
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
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Product", mappedBy="prices")
     */
    private $product;

    /**
     * @var string
     *
     * @ORM\Column(name="prices", type="text")
     */
    private $prices;


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
     * @return productPrice
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
     * Set prices
     *
     * @param string $prices
     *
     * @return productPrice
     */
    public function setPrices($prices)
    {
        $this->prices = $prices;

        return $this;
    }

    /**
     * Get prices
     *
     * @return string
     */
    public function getPrices()
    {
        return $this->prices;
    }
}

