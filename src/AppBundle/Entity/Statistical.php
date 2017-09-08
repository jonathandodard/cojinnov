<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 08/09/17
 * Time: 10:40
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Date;


/**
 * Class Statistical
 * @ORM\Table(name="statistical")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StatisticalRepository")
 */
class Statistical
{
    const PERIOD_1  = 1;
    const PERIOD_3  = 3;
    const PERIOD_6  = 6;
    const PERIOD_12 = 12;
    const PERIOD_INFI = 'INFINITY';

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
     * @ORM\ManyToOne(targetEntity="User")
     */
    public $user;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string")
     */
    public $name;

    /**
     * @var string
     *
     * @ORM\Column(name="period", type="string")
     */
    public $period;

    /**
     * @var string
     *
     * @ORM\Column(name="entity", type="string")
     */
    public $entity;

    /**
     * @var string
     *
     * @ORM\Column(name="argument", type="string")
     */
    public $argument;

    /**
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
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @param string $period
     */
    public function setPeriod($period)
    {
        $this->period = $period;
    }

    /**
     * @return string
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * @param string $entity
     */
    public function setEntity($entity)
    {
        $this->entity = $entity;
    }

    /**
     * @return string
     */
    public function getArgument()
    {
        return json_decode($this->argument);
    }

    /**
     * @param string $argument
     */
    public function setArgument($argument)
    {
        $this->argument = json_encode($argument);
    }
}