<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;

#[ApiResource]
#[ORM\Entity]
class Person
{
    #[ORM\Id] #[ORM\GeneratedValue] #[ORM\Column(type: "integer")]
    public ?int $id = null;

    #[ORM\Column(type: 'string')]
    public $foo;
}
