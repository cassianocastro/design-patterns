<?php
declare(strict_types=1);

namespace App\Other\Repository;

/**
 *
 */
interface Persistence
{

    public function generateID(): int;

    public function persist(iterable $data): void;

    public function retrieve(int $id): iterable;

    public function delete(int $id): void;

}