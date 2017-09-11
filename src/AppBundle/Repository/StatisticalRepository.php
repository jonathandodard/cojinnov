<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 08/09/17
 * Time: 13:25
 */

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Class StatisticalRepository
 * @package AppBundle\Repository
 */
class StatisticalRepository extends EntityRepository
{
//    public function getByDate(\Datetime $date)
//    {
//        $from = new \DateTime($date->format("Y-m-d")." 00:00:00");
//        $to   = new \DateTime($date->format("Y-m-d")." 23:59:59");
//
//        $qb = $this->createQueryBuilder("stat");
//        $qb
//            ->andWhere('stat.date BETWEEN :from AND :to')
//            ->setParameter('from', $from )
//            ->setParameter('to', $to)
//        ;
//        $result = $qb->getQuery()->getResult();
//
//        return $result;
//    }
}