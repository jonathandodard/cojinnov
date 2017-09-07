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
     * @var integer
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
    protected $product;

    /**
     * @ORM\ManyToOne(targetEntity="Customer", inversedBy="ProductOrder")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     */
    protected $customer;

    /**
     * @ORM\ManyToOne(targetEntity="OrderCustomer", inversedBy="ProductOrder")
     * @ORM\JoinColumn(name="order_id", referencedColumnName="id")
     */
    protected $orderId;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    protected $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="integer")
     */
    protected $price;

    /**
     * @var integer
     *
     * @ORM\Column(name="tva", type="integer")
     */
    protected $tva;

    /**
     * @var integer
     *
     * @ORM\Column(name="price_ht", type="integer")
     */
    protected $priceHt;

    /**
     * @var integer
     *
     * @ORM\Column(name="price_ttc", type="integer")
     */
    protected $priceTTC;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer")
     */
    protected $status;


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
     * @return integer
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * @param integer $tva
     */
    public function setTva($tva)
    {
        $this->tva = $tva;
    }

    /**
     * Set status
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

