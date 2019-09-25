<?php


namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class Task
{
    /**
     * @Assert\NotNull()
     * @Assert\Length(max = 50)
     */
    public $title;

    /**
     * @Assert\NotNull()
     * @Assert\Length(max = 500)
     */
    public $content;


    /**
     * @Assert\NotNull()
     * @Assert\Type(type="digit")
     */

    public $price;


}