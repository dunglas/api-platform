<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A review.
 *
 * @ORM\Entity
 * @ApiResource
 */
class Review
{
    /**
     * @var int The id of this book.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    public $id;

    /**
     * @var Book The reviewed book.
     *
     * @ORM\ManyToOne(targetEntity="Book")
     * @Assert\NotNull
     */
    public $book;

    /**
     * @var string The body of this review.
     *
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     * @Assert\Length(min="5")
     */
    public $body;

    /**
     * @var \DateTime The creation date
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    public $createdAt;
}
