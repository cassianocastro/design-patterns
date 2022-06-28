<?php
declare(strict_types=1);

namespace Tests\Creational;

use PHPUnit\Framework\TestCase;
use App\Structural\DataMapper\{ User, UserMapper, StorageAdapter };

/**
 *
 */
final class DataMapperTest extends TestCase
{

    /**
     * @test
     */
    public function canMapUserFromStorage(): void
    {
        $storage = new StorageAdapter(
            [
                1 => [ "name" => "Test", "email" => "test@test.com" ]
            ]
        );
        $mapper = new UserMapper($storage);

        $return = $mapper->findByID(1);

        self::assertInstanceOf(User::class, $return);
    }

    /**
     * @test
     */
    public function willNotMapInvalidData(): void
    {
        $this->expectErrorMessage("ID 1 not found!");

        $storage = new StorageAdapter([]);

        (new UserMapper($storage))->findByID(1);
    }
}