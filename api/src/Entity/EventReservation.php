<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiProperty;
use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;

#[ApiResource(types: ['https://schema.org/EventReservation'])]
#[ORM\Entity]
class EventReservation
{
    #[ORM\Id] #[ORM\GeneratedValue] #[ORM\Column(type: "integer")]
    public ?int $id = null;

    #[ApiProperty(types: ['https://schema.org/reservationNumber'])]
    #[ORM\Column]
    public string $reservationNumber;

    #[ApiProperty(types: ['https://schema.org/reservationStatus'])]
    #[ORM\Column]
    public string $reservationStatus;

    #[ApiProperty(types: ['https://schema.org/underName'])]
    #[ORM\ManyToOne(targetEntity: Person::class)]
    public Person $underName;

    #[ApiProperty(types: ['https://schema.org/reservationFor'])]
    #[ORM\ManyToOne(Event::class)]
    public Event $reservationFor;
}
