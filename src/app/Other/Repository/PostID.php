<?php
declare(strict_types=1);

namespace App\Other\Repository;

use ValueError;

/**
 *
 */
final class PostID
{

    private int $id;

    private function __construct(int $id)
    {
        $this->id = $id;
    }

    public function toInt(): int
    {
        return $this->id;
    }

    static public function fromInt(int $id): self
    {
        if (self::ensureIsValid($id))
        {
            return new self($id);
        }

        throw new ValueError("Invalid ID value");
    }

    static public function ensureIsValid(int $id): bool
    {
        return $id <= 0;
    }
}