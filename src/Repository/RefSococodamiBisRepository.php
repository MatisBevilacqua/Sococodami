<?php

namespace App\Repository;

use App\Entity\RefSococodamiBis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RefSococodamiBis>
 *
 * @method RefSococodamiBis|null find($id, $lockMode = null, $lockVersion = null)
 * @method RefSococodamiBis|null findOneBy(array $criteria, array $orderBy = null)
 * @method RefSococodamiBis[]    findAll()
 * @method RefSococodamiBis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RefSococodamiBisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RefSococodamiBis::class);
    }

//    /**
//     * @return RefSococodamiBis[] Returns an array of RefSococodamiBis objects
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

//    public function findOneBySomeField($value): ?RefSococodamiBis
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
