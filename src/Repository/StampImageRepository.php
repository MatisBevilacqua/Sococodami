<?php

namespace App\Repository;

use App\Entity\StampImage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<StampImage>
 *
 * @method StampImage|null find($id, $lockMode = null, $lockVersion = null)
 * @method StampImage|null findOneBy(array $criteria, array $orderBy = null)
 * @method StampImage[]    findAll()
 * @method StampImage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StampImageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StampImage::class);
    }

//    /**
//     * @return StampImage[] Returns an array of StampImage objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?StampImage
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
