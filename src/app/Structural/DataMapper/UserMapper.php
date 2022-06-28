<?php
declare(strict_types=1);

namespace App\Structural\DataMapper;

use ValueError;

/**
 *
 */
final class UserMapper
{

    private StorageAdapter $storage;

    public function __construct(StorageAdapter $storage)
    {
        $this->storage = $storage;
    }

    /**
     * @throws ValueError
     */
    public function findByID(int $id): User
    {
        try {
            $register = $this->storage->findByID($id);
        } catch (ValueError $e) {
            throw $e;
        }
        return $this->mapRegisterToUser($register);
    }

    private function mapRegisterToUser(iterable $register): User
    {
        return (new UserFactory())->create($register);
    }
}