<?php
declare(strict_types=1);

namespace App\Creational\FactoryMethod;

/**
 *
 */
interface LoggerFactory
{

    public function createLogger(): Logger;

}