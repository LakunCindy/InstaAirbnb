<?php


namespace App\DTO;
use Symfony\Component\Validator\Constraints as Assert;


class CreationHousing
{
    /**
     * @Assert\NotNull(message="title.title.not_blank")
     * @Assert\Type("string")
     */
    public $title;
    /**
     * @Assert\Type("string")
     */
    public $content;
    /**
     * @Assert\NotNull(message="price.price.not_blank")
     * @Assert\Type(type="numeric")
     */
    public $price;

    /**
     * @Assert\DateTime
     */
    public $createdAt;
}