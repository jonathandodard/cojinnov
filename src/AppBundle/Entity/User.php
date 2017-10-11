<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        $this->customers = new ArrayCollection();

        parent::__construct();
    }



    /**
     * @ORM\OneToMany(targetEntity="Customer", mappedBy="customer")
     */
    public $customers;

    /**
     * @ORM\OneToMany(targetEntity="ProductsOrder", mappedBy="productsOrder")
     */
    public $productsOrder;

    /**
     * @ORM\OneToMany(targetEntity="Product", mappedBy="products")
     */
    public $products;

    /**
     * @ORM\OneToMany(targetEntity="Statistical", mappedBy="statistical")
     */
    public $statistical;


    /**
     * @param Customer $customer
     * @return $this
     */
    public function addCustomer(Customer $customer)
    {
        $this->customers[] = $customer;

        return $this;
    }

    /**
     * @param Customer $customer
     */
    public function removeCustomers(Customer $customer)
    {
        $this->customers->removeElement($customer);
    }

    /**
     * @return mixed
     */
    public function getCustomers()
    {
        return $this->customers;
    }

    /**
     * @param Statistical $statistical
     * @return $this
     */
    public function addStatistical(Statistical $statistical)
    {
        $this->statistical[] = $statistical;

        return $this;
    }

    /**
     * @param Statistical $statistical
     */
    public function removeStatistical(Statistical $statistical)
    {
        $this->statistical->removeElement($statistical);
    }

    /**
     * @return Statistical
     */
    public function getStatistical()
    {
        return $this->statistical;
    }

    /**
     * @param ProductsOrder $productsOrder
     * @return $this
     */
    public function addProductsOrder(ProductsOrder $productsOrder)
    {
        $this->productsOrder[] = $productsOrder;

        return $this;
    }

    /**
     * @param ProductsOrder $productsOrder
     */
    public function removeProductsOrder(ProductsOrder $productsOrder)
    {
        $this->productsOrder->removeElement($productsOrder);
    }

    /**
     * @return mixed
     */
    public function getProductsOrder()
    {
        return $this->productsOrder;
    }

    /**
     * @param Product $products
     * @return $this
     */
    public function addProducts(Product $products)
    {
        $this->products[] = $products;

        return $this;
    }

    /**
     * @param Product $products
     */
    public function removeProducts(Product $products)
    {
        $this->products->removeElement($products);
    }

    /**
     * @return mixed
     */
    public function getProducts()
    {
        return $this->products;
    }



}