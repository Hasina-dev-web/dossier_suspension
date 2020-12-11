<?php

namespace App\Repository;

use App\Entity\DossierSuspension;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DossierSuspension|null find($id, $lockMode = null, $lockVersion = null)
 * @method DossierSuspension|null findOneBy(array $criteria, array $orderBy = null)
 * @method DossierSuspension[]    findAll()
 * @method DossierSuspension[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DossierSuspensionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DossierSuspension::class);
    }

    // /**
    //  * @return DossierSuspension[] Returns an array of DossierSuspension objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DossierSuspension
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
