<?php

namespace App\Repository;

use App\Entity\GestionSocio;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GestionSocio|null find($id, $lockMode = null, $lockVersion = null)
 * @method GestionSocio|null findOneBy(array $criteria, array $orderBy = null)
 * @method GestionSocio[]    findAll()
 * @method GestionSocio[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GestionSocioRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GestionSocio::class);
    }

    // /**
    //  * @return GestionSocio[] Returns an array of GestionSocio objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GestionSocio
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
