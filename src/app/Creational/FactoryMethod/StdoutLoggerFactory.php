<?php
declare(strict_types=1);

namespace App\Creational\FactoryMethod;

/**
 *
 */
class StdoutLoggerFactory implements LoggerFactory
{

    public function createLogger(): Logger
    {
        return new StdoutLogger();
    }
}