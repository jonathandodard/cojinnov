<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductRepository")
 */
class Product
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
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="integer")
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="conditionProduct", type="string", length=255)
     */
    private $conditionProduct;

    /**
     * @var int
     *
     * @ORM\Column(name="duration", type="integer")
     */
    private $duration;

    /**
     * @var int
     *
     * @ORM\Column(name="pcb", type="integer")
     */
    private $pcb;

    /**
     * @var string
     *
     * @ORM\Column(name="saleUnit", type="string", length=255)
     */
    private $saleUnit;

    /**
     * @var int
     *
     * @ORM\Column(name="tg", type="integer")
     */
    private $tg;

    /**
     * @var int
     *
     * @ORM\Column(name="ts", type="integer")
     */
    private $ts;

    /**
     * @var int
     *
     * @ORM\Column(name="tb", type="integer")
     */
    private $tb;

    /**
     * @var int
     *
     * @ORM\Column(name="taOne", type="integer")
     */
    private $taOne;

    /**
     * @var int
     *
     * @ORM\Column(name="taTwo", type="integer")
     */
    private $taTwo;

    /**
     * @var int
     *
     * @ORM\Column(name="ppdia", type="integer")
     */
    private $ppdia;


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
     * Set type
     *
     * @param string $type
     *
     * @return Product
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
     * Set reference
     *
     * @param integer $reference
     *
     * @return Product
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return int
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Product
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
     * Set category
     *
     * @param string $category
     *
     * @return Product
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set conditionProduct
     *
     * @param string $conditionProduct
     *
     * @return Product
     */
    public function setConditionProduct($conditionProduct)
    {
        $this->conditionProduct = $conditionProduct;

        return $this;
    }

    /**
     * Get conditionProduct
     *
     * @return string
     */
    public function getConditionProduct()
    {
        return $this->conditionProduct;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     *
     * @return Product
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set pcb
     *
     * @param integer $pcb
     *
     * @return Product
     */
    public function setPcb($pcb)
    {
        $this->pcb = $pcb;

        return $this;
    }

    /**
     * Get pcb
     *
     * @return int
     */
    public function getPcb()
    {
        return $this->pcb;
    }

    /**
     * Set saleUnit
     *
     * @param string $saleUnit
     *
     * @return Product
     */
    public function setSaleUnit($saleUnit)
    {
        $this->saleUnit = $saleUnit;

        return $this;
    }

    /**
     * Get saleUnit
     *
     * @return string
     */
    public function getSaleUnit()
    {
        return $this->saleUnit;
    }

    /**
     * Set tg
     *
     * @param integer $tg
     *
     * @return Product
     */
    public function setTg($tg)
    {
        $this->tg = $tg;

        return $this;
    }

    /**
     * Get tg
     *
     * @return int
     */
    public function getTg()
    {
        return $this->tg;
    }

    /**
     * Set ts
     *
     * @param integer $ts
     *
     * @return Product
     */
    public function setTs($ts)
    {
        $this->ts = $ts;

        return $this;
    }

    /**
     * Get ts
     *
     * @return int
     */
    public function getTs()
    {
        return $this->ts;
    }

    /**
     * Set tb
     *
     * @param integer $tb
     *
     * @return Product
     */
    public function setTb($tb)
    {
        $this->tb = $tb;

        return $this;
    }

    /**
     * Get tb
     *
     * @return int
     */
    public function getTb()
    {
        return $this->tb;
    }

    /**
     * Set taOne
     *
     * @param integer $taOne
     *
     * @return Product
     */
    public function setTaOne($taOne)
    {
        $this->taOne = $taOne;

        return $this;
    }

    /**
     * Get taOne
     *
     * @return int
     */
    public function getTaOne()
    {
        return $this->taOne;
    }

    /**
     * Set taTwo
     *
     * @param integer $taTwo
     *
     * @return Product
     */
    public function setTaTwo($taTwo)
    {
        $this->taTwo = $taTwo;

        return $this;
    }

    /**
     * Get taTwo
     *
     * @return int
     */
    public function getTaTwo()
    {
        return $this->taTwo;
    }

    /**
     * Set ppdia
     *
     * @param integer $ppdia
     *
     * @return Product
     */
    public function setPpdia($ppdia)
    {
        $this->ppdia = $ppdia;

        return $this;
    }

    /**
     * Get ppdia
     *
     * @return int
     */
    public function getPpdia()
    {
        return $this->ppdia;
    }
}

