<?php

namespace App\Repository;

use App\Entity\CarContact;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CarContact>
 *
 * @method CarContact|null find($id, $lockMode = null, $lockVersion = null)
 * @method CarContact|null findOneBy(array $criteria, array $orderBy = null)
 * @method CarContact[]    findAll()
 * @method CarContact[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarContactRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CarContact::class);
    }

//    /**
//     * @return CarContact[] Returns an array of CarContact objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CarContact
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
