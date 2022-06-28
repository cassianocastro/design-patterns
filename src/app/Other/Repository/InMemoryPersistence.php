<?php

declare(strict_types=1);

namespace App\Other\Repository;

use OutOfBoundsException;

/**
 *
 */
final class InMemoryPersistence implements Persistence
{

    private array $data;
    private int $lastID;

    public function __construct()
    {
        $this->data   = [];
        $this->lastID = 0;
    }

    public function generateID(): int
    {
        $this->lastID++;

        return $this->lastID;
    }

    public function persist(iterable $data): void
    {
        $this->data[$this->lastID] = $data;
    }

    public function retrieve(int $id): iterable
    {
        if ( ! isset($this->data[$id]) )
        {
            throw new OutOfBoundsException("No data found for ID $id");
        }
        return $this->data[$id];
    }

    public function delete(int $id): void
    {
        if ( ! isset($this->data[$id]) )
        {
            throw new OutOfBoundsException("No data found for ID $id");
        }
        unset($this->data[$id]);
    }
}