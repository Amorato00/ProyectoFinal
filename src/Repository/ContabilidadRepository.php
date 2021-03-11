<?php

namespace App\Repository;

use App\Entity\Contabilidad;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Contabilidad|null find($id, $lockMode = null, $lockVersion = null)
 * @method Contabilidad|null findOneBy(array $criteria, array $orderBy = null)
 * @method Contabilidad[]    findAll()
 * @method Contabilidad[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContabilidadRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Contabilidad::class);
    }

    // /**
    //  * @return Contabilidad[] Returns an array of Contabilidad objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Contabilidad
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
