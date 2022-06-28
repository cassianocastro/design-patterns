<?php
declare(strict_types=1);

namespace Tests\Structural;

use App\Structural\DependencyInjection\{ DatabaseConfig, DatabaseConnection };
use PHPUnit\Framework\TestCase;

/**
 *
 */
final class DependencyInjectionTest extends TestCase
{

    public function testDependencyInjection(): void
    {
        $config = new DatabaseConfig("localhost", "root", "1234", 3306);
        $connection = new DatabaseConnection($config);

        self::assertEquals('root:1234@:localhost:3306', $connection->getDsn());
    }
}