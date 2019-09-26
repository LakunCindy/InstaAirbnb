<?php


namespace App\DTO;
use Symfony\Component\Validator\Constraints as Assert;


class CreationHousing
{
    /**
     * @Assert\NotNull()
     * @Assert\Type("string")
     */
    public $title;
    /**
     * @Assert\Type("string")
     */
    public $content;
    /**
     * @Assert\Type(type="numeric")
     */
    public $price;

    /**
     * @Assert\DateTime
     */
    public $createdAt;
}