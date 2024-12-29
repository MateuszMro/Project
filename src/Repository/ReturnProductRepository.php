<?php

namespace App\Repository;

use App\Entity\ReturnProduct;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ReturnProduct>
 *
 * @method ReturnProduct|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReturnProduct|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReturnProduct[]    findAll()
 * @method ReturnProduct[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReturnProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReturnProduct::class);
    }

//    /**
//     * @return ReturnProduct[] Returns an array of ReturnProduct objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ReturnProduct
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
