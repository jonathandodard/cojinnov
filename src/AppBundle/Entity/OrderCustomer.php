<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * OrderCustomer
 *
 * @ORM\Table(name="order_customer")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrderCustomerRepository")
 */
class OrderCustomer
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
     * @ORM\ManyToOne(targetEntity="User", inversedBy="OrderCustomer")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

    /**
     * @ORM\ManyToOne(targetEntity="Customer", inversedBy="OrderCustomer")
     * @ORM\JoinColumn(name="Customer_id", referencedColumnName="id")
     */
    protected $customer;

    /**
     * Many Users have Many Groups.
     * @ORM\ManyToMany(targetEntity="Product")
     * @ORM\JoinTable(name="orderCustomer_product",
     *      joinColumns={@ORM\JoinColumn(name="orderCustomer", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="product_id", referencedColumnName="id")}
     *      )
     */
    protected $products;


    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

