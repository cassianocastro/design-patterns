<?php
namespace Creational\FactoryMethod;
use Creational\FactoryMethod\LoggerFactory;
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

?>
