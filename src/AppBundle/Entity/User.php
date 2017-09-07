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
        // your own logic
    }



    /**
     * @ORM\OneToMany(targetEntity="Customer", mappedBy="customer")
     */
    private $customers;


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
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customers;
    }


}