<?php


namespace App\Entity;
use App\DTO\CreationHousing;
use Doctrine\ORM\Mapping as ORM;


/**

 * @ORM\Entity(repositoryClass="App\Repository\HousingRepository")

 */
class Housing
{
    /**

     * @ORM\Column(name="id", type="integer")

     * @ORM\Id

     * @ORM\GeneratedValue(strategy="AUTO")

     */
    private $id;

    /** @ORM\Column(nullable=false) */
    private $title;

    /** @ORM\Column(nullable=false) */
    private $price;

    /** @ORM\Column(nullable=true) */
    private $content;

    /** @ORM\Column(type="datetime") */
    private $createdAt;

    /**
     * Housing constructor.
     */
    public function __construct(CreationHousing $creationHousing)
    {
        $this->title=$creationHousing->title;
        $this->price=$creationHousing->price;
        $this->content=$creationHousing->content;
        $this->createdAt=new \DateTime();
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt): void
    {
        $this->createdAt = $createdAt;
    }

}