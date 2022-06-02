<?php
declare(strict_types=1);

namespace Creational\Pool;

/**
 *
 */
class Test
{

    public function canGetNewInstanceWithGet()
    {
        $pool    = new WorkerPool();
        $worker1 = $pool->get();
        $worker2 = $pool->get();

        echo __METHOD__ . ":" . PHP_EOL . "pool->count() === 2: \n";
        var_dump($pool->count() === 2);
        echo "worker1 !== worker2:" . PHP_EOL;
        var_dump($worker1 !== $worker2);
    }

    public function canGetSameInstanceTwiceWhenDisposingItFirst()
    {
        $pool    = new WorkerPool();
        $worker1 = $pool->get();
        $pool->dispose($worker1);
        $worker2 = $pool->get();

        echo __METHOD__ . ":" . PHP_EOL . "pool->count() === 1: \n";
        var_dump($pool->count() === 1);

        echo "worker1 === worker2:" . PHP_EOL;
        var_dump($worker1 === $worker2);
    }
}