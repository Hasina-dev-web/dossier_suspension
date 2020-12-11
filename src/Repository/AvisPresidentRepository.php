<?php

namespace App\Repository;

use App\Entity\AvisPresident;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AvisPresident|null find($id, $lockMode = null, $lockVersion = null)
 * @method AvisPresident|null findOneBy(array $criteria, array $orderBy = null)
 * @method AvisPresident[]    findAll()
 * @method AvisPresident[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AvisPresidentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AvisPresident::class);
    }

    // /**
    //  * @return AvisPresident[] Returns an array of AvisPresident objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AvisPresident
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
