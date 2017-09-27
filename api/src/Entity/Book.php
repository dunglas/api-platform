<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A book.
 *
 * @ApiResource
 * @ORM\Entity
 */
class Book
{
    /**
     * @var int The id of this book.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string The title of this book.
     *
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     */
    public $title;

    /**
     * @var string The ISBN number of the book
     *
     * @Assert\Isbn
     * @ORM\Column(type="text", nullable=true)
     */
    public $isbn;

    /**
     * @var \DateTime The date of publication
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    public $publishedAt;

    public function getId()
    {
        return $this->id;
    }
}
