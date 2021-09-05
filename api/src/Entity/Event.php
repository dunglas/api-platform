<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;

#[ApiResource]
#[ORM\Entity]
class Event
{
    #[ORM\Id] #[ORM\GeneratedValue] #[ORM\Column(type: "integer")]
    public ?int $id = null;
}
