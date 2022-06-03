<?php
declare(strict_types=1);

namespace Tests\Creational;

use App\Creational\Pool\WorkerPool;
use PHPUnit\Framework\TestCase;

/**
 *
 */
final class PoolTest extends TestCase
{

    /**
     * @test
     */
    public function canGetNewInstanceWithGet(): void
    {
        $pool    = new WorkerPool();
        $worker1 = $pool->get();
        $worker2 = $pool->get();

        self::assertCount(2, $pool);
        self::assertNotSame($worker1, $worker2);
    }

    /**
     * @test
     */
    public function canGetSameInstanceTwiceWhenDisposingItFirst(): void
    {
        $pool    = new WorkerPool();
        $worker1 = $pool->get();

        $pool->dispose($worker1);
        $worker2 = $pool->get();

        self::assertCount(1, $pool);
        self::assertSame($worker1, $worker2);
    }
}