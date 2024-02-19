<?php

namespace App\Repository;

use App\Entity\Defects;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Defects>
 *
 * @method Defects|null find($id, $lockMode = null, $lockVersion = null)
 * @method Defects|null findOneBy(array $criteria, array $orderBy = null)
 * @method Defects[]    findAll()
 * @method Defects[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DefectsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Defects::class);
    }

//    /**
//     * @return Defects[] Returns an array of Defects objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Defects
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
