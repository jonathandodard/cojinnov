<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\date;

/**
 * OrderCustomer
 *
 * @ORM\Table(name="order_customer")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrderCustomerRepository")
 */
class OrderCustomer
{
    use date;

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
     * @ORM\Column(type="integer", length=255, nullable=false)
     */
    protected $tva;

    /**
     * @ORM\Column(type="integer", length=255, nullable=false)
     */
    protected $totalHT;

    /**
     * @ORM\Column(type="integer", length=255, nullable=false)
     */
    protected $totalTTC;


    /**
     * OrderCustomer constructor.
     */
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

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param mixed $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return mixed
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * @param mixed $tva
     */
    public function setTva($tva)
    {
        $this->tva = $tva;
    }

    /**
     * @return mixed
     */
    public function getTotalHT()
    {
        return $this->totalHT;
    }

    /**
     * @param mixed $totalHT
     */
    public function setTotalHT($totalHT)
    {
        $this->totalHT = $totalHT;
    }

    /**
     * @return mixed
     */
    public function getTotalTTC()
    {
        return $this->totalTTC;
    }

    /**
     * @param mixed $totalTTC
     */
    public function setTotalTTC($totalTTC)
    {
        $this->totalTTC = $totalTTC;
    }
}

