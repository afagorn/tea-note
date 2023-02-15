<?php

declare(strict_types=1);

namespace App\Entity;

use DomainException;
use Ramsey\Uuid\Uuid;

class Guid
{
    public function __construct(
        private string $value
    )
    {
        $this->validate($this->value);
    }

    private function validate(string $value): void
    {
        if (Uuid::isValid($value)) {
            throw new DomainException('Wrong guid value');
        }
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
