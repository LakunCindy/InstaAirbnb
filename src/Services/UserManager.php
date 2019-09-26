<?php


namespace App\Services;



use App\DTO\CreationHousing;
use App\Entity\Housing;

use Doctrine\Common\Persistence\ObjectManager;



class UserManager
{
    private $entityManager;

    public function __construct(ObjectManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    public function save(CreationHousing $creationHousing) :void
    {
        $housing = new Housing($creationHousing);
        $housing->setTitle($creationHousing->title);
        $housing->setPrice($creationHousing->price);
        $housing->setContent($creationHousing->content);

        // Tell Doctrine you want to save the Product (no queries yet)
        $this->entityManager->persist($housing);
        // Executes the queries (i.e. the INSERT query)
        $this->entityManager->flush();
    }

    public function findAnnouncement($limit){

        return $this->entityManager
            ->getRepository(Housing::class)
            ->findHousingForAnnouncements($limit);
    }
}