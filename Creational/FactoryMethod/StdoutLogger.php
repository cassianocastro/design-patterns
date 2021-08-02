<?php
namespace Creational\FactoryMethod;
use Creational\FactoryMethod\Logger;

/**
 *
 */
class StdoutLogger implements Logger
{

    public function log(string $message)
    {
        echo $message;
    }
}

?>
