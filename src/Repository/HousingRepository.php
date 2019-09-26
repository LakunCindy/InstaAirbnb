<?php


namespace App\Repository;

use App\Entity\Housing;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityRepository;


    class HousingRepository extends ServiceEntityRepository
    {
        public function __construct(ManagerRegistry $registry)

        {

            parent::__construct($registry, Housing::class);

        }

        public function findHousingForAnnouncements($limit): array
        {
            return $this->createQueryBuilder('housing')
                ->orderBy('housing.id', 'DESC')
                ->setMaxResults($limit)
                ->getQuery()
                ->getResult();
        }
    }