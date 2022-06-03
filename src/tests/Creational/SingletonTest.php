<?php
declare(strict_types=1);

namespace Tests\Creational;

use App\Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

/**
 *
 */
final class SingletonTest extends TestCase
{

    /**
     * @test
     */
    public function canGetTheSameInstance(): void
    {
        $instance = Singleton::getInstance();
        $other    = Singleton::getInstance();

        self::assertSame($other, $instance);
    }
}