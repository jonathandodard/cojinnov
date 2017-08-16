<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Date;

/**
 * ProductsOrder
 *
 * @ORM\Table(name="products_order")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductsOrderRepository")
 */
class ProductsOrder
{

    const VALIDATE = '1';
    const SAVE = '2';

    use Date;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="ProductOrder")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $product;

    /**
     * @ORM\ManyToOne(targetEntity="Customer", inversedBy="ProductOrder")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     */
    private $customer;

    /**
     * @ORM\ManyToOne(targetEntity="OrderCustomer", inversedBy="ProductOrder")
     * @ORM\JoinColumn(name="order_id", referencedColumnName="id")
     */
    private $orderId;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="integer")
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="price_ht" type="integer")
     */
    private $priceHt;

    /**
     * @var int
     *
     * @ORM\Column(name="price_ttc" type="integer")
     */
    private $priceTTC;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;


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
     * @return ProductsOrder
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
     * Set customer
     *
     * @param string $customer
     *
     * @return ProductsOrder
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return string
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set orderCustomer
     *
     * @param int $orderId
     *
     * @return ProductsOrder
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderCustomer
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return ProductsOrder
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return ProductsOrder
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer
     */
    public function getPrice()
    {
        return $this->price;
    }


    /**
     * Set price
     *
     * @param integer $status
     *
     * @return ProductsOrder
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return int
     */
    public function getPriceHt()
    {
        return $this->priceHt;
    }

    /**
     * @param int $priceHt
     */
    public function setPriceHt($priceHt)
    {
        $this->priceHt = $priceHt;
    }

    /**
     * @return int
     */
    public function getPriceTTC()
    {
        return $this->priceTTC;
    }

    /**
     * @param int $priceTTC
     */
    public function setPriceTTC($priceTTC)
    {
        $this->priceTTC = $priceTTC;
    }
}

