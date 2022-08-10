<?php

namespace App\Repository;

use App\Entity\ValidationDemandeUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ValidationDemandeUser>
 *
 * @method ValidationDemandeUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method ValidationDemandeUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method ValidationDemandeUser[]    findAll()
 * @method ValidationDemandeUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ValidationDemandeUserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ValidationDemandeUser::class);
    }

    public function add(ValidationDemandeUser $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ValidationDemandeUser $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ValidationDemandeUser[] Returns an array of ValidationDemandeUser objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('v.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ValidationDemandeUser
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
