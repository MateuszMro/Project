<?php

namespace App\Repository;

use App\Entity\OrderSpecialist;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OrderSpecialist>
 *
 * @method OrderSpecialist|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrderSpecialist|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrderSpecialist[]    findAll()
 * @method OrderSpecialist[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrderSpecialistRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrderSpecialist::class);
    }

//    /**
//     * @return OrderSpecialist[] Returns an array of OrderSpecialist objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('o.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?OrderSpecialist
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
