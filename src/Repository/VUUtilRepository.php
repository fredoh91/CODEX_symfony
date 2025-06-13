<?php

// namespace App\Codex\Repository;
namespace App\Repository;

// use App\Codex\Entity\VUUtil;
use App\Entity\VUUtil;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<VUUtil>
 *
 * @method VUUtil|null find($id, $lockMode = null, $lockVersion = null)
 * @method VUUtil|null findOneBy(array $criteria, array $orderBy = null)
 * @method VUUtil[]    findAll()
 * @method VUUtil[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VUUtilRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VUUtil::class);
    }

    public function add(VUUtil $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(VUUtil $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }


    /**
     * @return VUUtil[] Returns an array of VUUtil objects
     */
    public function findByDeno($deno): array
    {
        return $this->createQueryBuilder('v')
            // ->andWhere($this->expr()->like('v.nomVU', ':deno'))
            // ->andWhere('v.nomVU = :deno')
            // ->setParameter('deno', '%' . $deno . '%')
            ->andWhere('v.nomVU LIKE :deno')
            ->setParameter('deno', '%' . $deno . '%')
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    //    /**
    //     * @return VUUtil[] Returns an array of VUUtil objects
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

    //    public function findOneBySomeField($value): ?VUUtil
    //    {
    //        return $this->createQueryBuilder('v')
    //            ->andWhere('v.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
