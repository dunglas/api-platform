<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * This is a dummy entity. Remove it!
 *
 * @ApiResource
 * @ORM\Entity
 */
class NotDeprecatedResource
{
    /**
     * @var int The entity Id
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string A nice person
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $notDeprecatedField;

    /**
     * @var string A nice person
     *
     * @ORM\Column
     * @Assert\NotBlank
     * @ApiProperty(deprecationReason="This field is deprecated")
     */
    public $deprecatedField = '';

    public function getId(): int
    {
        return $this->id;
    }
}
