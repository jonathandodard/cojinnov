<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Date;

/**
 * Provider
 *
 * @ORM\Table(name="provider")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProviderRepository")
 */
class Provider
{
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
     * @ORM\ManyToOne(targetEntity="User")
     */
    protected $user;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="zip_code", type="integer", length=255)
     */
    private $zipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="siret", type="integer", length=255)
     */
    private $siret;

    /**
     * @var string
     *
     * @ORM\Column(name="franco", type="string", length=255)
     */
    private $franco;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_condition", type="string", length=255)
     */
    private $paymentCondition;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_time", type="string", length=255)
     */
    private $deliveryTime;

    /**
     * @var string
     *
     * @ORM\Column(name="product_definition", type="string", length=255)
     */
    protected $productDefinition;

    /**
     * @var string
     *
     * @ORM\Column(name="price_definition", type="string", length=255)
     */
    protected $priceDefinition;


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
     * Set name
     *
     * @param string $name
     *
     * @return Provider
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Provider
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }



    /**
     * Set type
     *
     * @param string $type
     *
     * @return Provider
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return Provider
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     *
     * @return Provider
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set siret
     *
     * @param string $siret
     *
     * @return Provider
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;

        return $this;
    }

    /**
     * Get siret
     *
     * @return string
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * Set franco
     *
     * @param string $franco
     *
     * @return Provider
     */
    public function setFranco($franco)
    {
        $this->franco = $franco;

        return $this;
    }

    /**
     * Get franco
     *
     * @return string
     */
    public function getFranco()
    {
        return $this->franco;
    }

    /**
     * Set paymentCondition
     *
     * @param string $paymentCondition
     *
     * @return Provider
     */
    public function setPaymentCondition($paymentCondition)
    {
        $this->paymentCondition = $paymentCondition;

        return $this;
    }

    /**
     * Get paymentCondition
     *
     * @return string
     */
    public function getPaymentCondition()
    {
        return $this->paymentCondition;
    }

    /**
     * Set deliveryTime
     *
     * @param string $deliveryTime
     *
     * @return Provider
     */
    public function setDeliveryTime($deliveryTime)
    {
        $this->deliveryTime = $deliveryTime;

        return $this;
    }

    /**
     * Get deliveryTime
     *
     * @return string
     */
    public function getDeliveryTime()
    {
        return $this->deliveryTime;
    }

    /**
     * Set productDefinition
     *
     * @param string $productDefinition
     *
     * @return Provider
     */
    public function setProductDefinition($productDefinition)
    {
        $this->productDefinition = $productDefinition;

        return $this;
    }

    /**
     * Get productDefinition
     *
     * @return string
     */
    public function getProductDefinition()
    {
        return json_decode($this->productDefinition);
    }

    /**
     * Set priceDefinition
     *
     * @param string $priceDefinition
     *
     * @return Provider
     */
    public function setPriceDefinition($priceDefinition)
    {
        $this->priceDefinition = $priceDefinition;

        return $this;
    }

    /**
     * Get priceDefinition
     *
     * @return string
     */
    public function getPriceDefinition()
    {
        return json_decode($this->priceDefinition);
    }
}

