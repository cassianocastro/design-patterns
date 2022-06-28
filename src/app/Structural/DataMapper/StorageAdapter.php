<?php
declare(strict_types=1);

namespace App\Structural\DataMapper;

use ValueError;

/**
 *
 */
final class StorageAdapter
{

    private array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function findByID(int $id): array
    {
        if ( ! isset($this->data[$id]) )
        {
            throw new ValueError("ID $id not found!");
        }
        return $this->data[$id];
    }
}