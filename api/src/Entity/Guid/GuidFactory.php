<?php

declare(strict_types=1);

namespace App\Entity\Guid;

use Ramsey\Uuid\UuidFactoryInterface;

class GuidFactory
{
    public function __construct(
        private readonly UuidFactoryInterface $uuidFactory
    )
    {
    }

    public function make(): Guid
    {
        return new Guid($this->uuidFactory->uuid4());
    }
}
