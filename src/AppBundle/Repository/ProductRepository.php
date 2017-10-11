<?php

namespace AppBundle\Repository;

/**
 * ProductRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductRepository extends \Doctrine\ORM\EntityRepository
{
    public function searchByAll($data, $user)
    {
        $query = $this->createQueryBuilder('p')
            ->where("p.reference LIKE '$data%'")
            ->andWhere("p.user = :user")
            ->setParameter('user', $user )
            ->getQuery()
            ->getResult();

        return $query;
    }
}
