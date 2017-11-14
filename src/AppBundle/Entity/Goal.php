<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Date;

/**
 * Goal
 *
 * @ORM\Table(name="goal")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GoalRepository")
 */
class Goal
{
    public function __construct()
    {
        $this->goalOne = 0;
        $this->goalTwo = 0;
        $this->goalThree = 0;
    }

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
     * @var $user
     *
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;


    /**
     * @var $goalOne
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $goalOne;

    /**
     * @var $goalOneRef
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $goalOneRef;

    /**
     * @var $goalTwo
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $goalTwo;

    /**
     * @var $goalThree
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $goalThree;

    /**
     * @var $goalFour
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $goalFour;

    /**
     * @var $goalFive
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $goalFive;

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
    public function getGoalOne()
    {
        return $this->goalOne;
    }

    /**
     * @param mixed $goalOne
     */
    public function setGoalOne($goalOne)
    {
        $this->goalOne = $goalOne;
    }

    /**
     * @return mixed
     */
    public function getGoalOneRef()
    {
        return $this->goalOneRef;
    }

    /**
     * @param mixed $goalOneRef
     */
    public function setGoalOneRef($goalOneRef)
    {
        $this->goalOneRef = $goalOneRef;
    }

    /**
     * @return mixed
     */
    public function getGoalTwo()
    {
        return $this->goalTwo;
    }

    /**
     * @param mixed $goalTwo
     */
    public function setGoalTwo($goalTwo)
    {
        $this->goalTwo = $goalTwo;
    }

    /**
     * @return mixed
     */
    public function getGoalThree()
    {
        return $this->goalThree;
    }

    /**
     * @param mixed $goalThree
     */
    public function setGoalThree($goalThree)
    {
        $this->goalThree = $goalThree;
    }

    /**
     * @return mixed
     */
    public function getGoalFour()
    {
        return $this->goalFour;
    }

    /**
     * @param mixed $goalFour
     */
    public function setGoalFour($goalFour)
    {
        $this->goalFour = $goalFour;
    }

    /**
     * @return mixed
     */
    public function getGoalFive()
    {
        return $this->goalFive;
    }

    /**
     * @param mixed $goalFive
     */
    public function setGoalFive($goalFive)
    {
        $this->goalFive = $goalFive;
    }
}

