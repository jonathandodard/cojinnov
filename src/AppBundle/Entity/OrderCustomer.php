<?php

namespace AppBundle\Entity;

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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

