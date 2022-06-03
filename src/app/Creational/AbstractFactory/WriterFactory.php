<?php
declare(strict_types=1);

namespace App\Creational\AbstractFactory;

/**
 *
 */
interface WriterFactory
{
    public function createJSONwriter(): JSONwriter;

    public function createCSVwriter(): CSVwriter;

}