<?php

namespace Creational\FactoryMethod;

/**
 *
 */
class StdoutLogger implements namespace\Logger
{

    public function log(string $message)
    {
        echo $message;
    }
}