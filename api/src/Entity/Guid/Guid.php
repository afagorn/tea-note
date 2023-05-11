<?php

declare(strict_types=1);

namespace App\Entity\Guid;

use Ramsey\Uuid\UuidInterface;

class Guid
{
    public function __construct(
        private readonly UuidInterface $uuid
    )
    {
    }

    public function getUuid(): UuidInterface
    {
        return $this->uuid;
    }

    public function getValue(): string
    {
        return $this->uuid->toString();
    }
}
