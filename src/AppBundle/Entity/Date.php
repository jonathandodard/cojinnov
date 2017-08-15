<?php


/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 07/08/17
 * Time: 19:58
 */
namespace AppBundle\Entity;


trait Date
{

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    protected $createdAt;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime", nullable = true)
     */
    protected $updatedAt;

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param string $date
     *
     * @return $this
     */
    public function setCreatedAt($date = 'now')
    {
        if ($date && !is_string($date)) {
            $date = 'now';
        }

        $this->createdAt = new \DateTime($date);

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param string $date
     *
     * @return $this
     */
    public function setUpdatedAt($date)
    {
        if (!is_string($date)) {
            $date = 'now';
        }

        $this->updatedAt = new \DateTime($date);

        return $this;
    }
}