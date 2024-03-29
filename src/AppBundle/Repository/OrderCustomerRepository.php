<?php

namespace AppBundle\Repository;

use AppBundle\Entity\User;

/**
 * OrderCustomerRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class OrderCustomerRepository extends \Doctrine\ORM\EntityRepository
{

    public function menstrual(User $user)
    {
        $dateNow = new \DateTime('NOW');
        $dateAt = new \DateTime($dateNow->format('Y').'-'.$dateNow->format('n').'-01 00:00:00');
        $dateTo = new \DateTime($dateNow->format('Y').'-'.$dateNow->format('n').'-'.cal_days_in_month(CAL_GREGORIAN, $dateNow->format('n'), $dateNow->format('Y')).' 23:59:59');

        $qb = $this->createQueryBuilder("oc");
        $qb
            ->where('oc.createdAt BETWEEN :from AND :to')
            ->andWhere('oc.user = :user')
            ->setParameter('from', $dateAt )
            ->setParameter('to', $dateTo)
            ->setParameter('user', $user)
        ;
        $result = $qb->getQuery()->getResult();

        return $result;
    }

    public function yearly($user)
    {
        $dateNow =new \DateTime('NOW');
        $dateAt =new \DateTime($dateNow->format('Y').'-01-01 00:00:00');
        $dateTo =new \DateTime($dateNow->format('Y').'-12-31 23:59:59');

        $qb = $this->createQueryBuilder("oc");
        $qb
            ->where('oc.createdAt BETWEEN :from AND :to')
            ->andWhere('oc.user = :user')
            ->setParameter('from', $dateAt )
            ->setParameter('to', $dateTo)
            ->setParameter('user', $user)
        ;
        $result = $qb->getQuery()->getResult();

        return $result;
    }

    public function quarterOne($user)
    {
        $dateNow =new \DateTime('NOW');
        $dateAt =new \DateTime($dateNow->format('Y').'-01-01 00:00:00');
        $dateTo =new \DateTime($dateNow->format('Y').'-03-31 23:59:59');

        $qb = $this->createQueryBuilder("oc");
        $qb
            ->where('oc.createdAt BETWEEN :from AND :to')
            ->andWhere('oc.user = :user')
            ->setParameter('from', $dateAt )
            ->setParameter('to', $dateTo)
            ->setParameter('user', $user)


        ;
        $result = $qb->getQuery()->getResult();

        return $result;
    }

    public function quarterTwo($user)
    {
        $dateNow =new \DateTime('NOW');
        $dateAt =new \DateTime($dateNow->format('Y').'-04-01 00:00:00');
        $dateTo =new \DateTime($dateNow->format('Y').'-06-31 23:59:59');

        $qb = $this->createQueryBuilder("oc");
        $qb
            ->where('oc.createdAt BETWEEN :from AND :to')
            ->andWhere('oc.user = :user')
            ->setParameter('from', $dateAt )
            ->setParameter('to', $dateTo)
            ->setParameter('user', $user)
        ;
        $result = $qb->getQuery()->getResult();

        return $result;
    }

    public function quarterThree($user)
    {
        $dateNow =new \DateTime('NOW');
        $dateAt =new \DateTime($dateNow->format('Y').'-07-01 00:00:00');
        $dateTo =new \DateTime($dateNow->format('Y').'-09-31 23:59:59');

        $qb = $this->createQueryBuilder("oc");
        $qb
            ->where('oc.createdAt BETWEEN :from AND :to')
            ->andWhere('oc.user = :user')
            ->setParameter('from', $dateAt )
            ->setParameter('to', $dateTo)
            ->setParameter('user', $user)
        ;
        $result = $qb->getQuery()->getResult();

        return $result;
    }

    public function quarterFour($user)
    {
        $dateNow =new \DateTime('NOW');
        $dateAt =new \DateTime($dateNow->format('Y').'-10-01 00:00:00');
        $dateTo =new \DateTime($dateNow->format('Y').'-12-31 23:59:59');

        $qb = $this->createQueryBuilder("oc");
        $qb
            ->where('oc.createdAt BETWEEN :from AND :to')
            ->andWhere('oc.user = :user')
            ->setParameter('from', $dateAt )
            ->setParameter('to', $dateTo)
            ->setParameter('user', $user)
        ;
        $result = $qb->getQuery()->getResult();

        return $result;
    }
}
