<?php

namespace Creational\FactoryMethod;

/**
 *
 */
class StdoutLoggerFactory implements namespace\LoggerFactory
{

    public function createLogger(): Logger
    {
        return new StdoutLogger();
    }
}