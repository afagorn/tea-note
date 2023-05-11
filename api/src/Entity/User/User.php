<?php

declare(strict_types=1);

namespace App\Entity\User;

use App\Entity\Guid\Guid;

class User
{
    public function __construct(
        private readonly Guid $guid,
        private readonly Name $name
    )
    {
    }

	public function getGuid(): Guid
	{
		return $this->guid;
	}

	public function getName(): Name
	{
		return $this->name;
	}
}
