<?php
declare(strict_types=1);

namespace App\Behavioral\NullObject;

/**
 *
 */
final class Service
{

    private Logger $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function doSomething()
    {
        $this->logger->log("Nós estamos no método " . __METHOD__);
    }
}