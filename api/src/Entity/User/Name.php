<?php

declare(strict_types=1);

namespace App\Entity\User;

class Name
{
    private const FULL_NAME_TEMPLATE = '%s %s';

    public function __construct(
        private readonly string $firstName,
        private readonly string $lastName
    )
    {
    }

    public function getFullName(): string
    {
        return sprintf(self::FULL_NAME_TEMPLATE, $this->firstName, $this->lastName);
    }

    public function getFullNameRevert(): string
    {
        return sprintf(self::FULL_NAME_TEMPLATE, $this->lastName, $this->firstName);
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }
}
