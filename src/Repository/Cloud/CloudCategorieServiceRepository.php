<?php

namespace App\Repository\Cloud;

use App\Entity\Cloud\CloudCategorieService;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CloudCategorieService|null find($id, $lockMode = null, $lockVersion = null)
 * @method CloudCategorieService|null findOneBy(array $criteria, array $orderBy = null)
 * @method CloudCategorieService[]    findAll()
 * @method CloudCategorieService[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CloudCategorieServiceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CloudCategorieService::class);
    }

    // /**
    //  * @return CloudCategorieService[] Returns an array of CloudCategorieService objects
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
    public function findOneBySomeField($value): ?CloudCategorieService
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
