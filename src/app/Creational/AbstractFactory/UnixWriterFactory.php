<?php
declare(strict_types=1);

namespace App\Creational\AbstractFactory;

/**
 *
 */
class UnixWriterFactory implements WriterFactory
{

    public function createCSVwriter(): CSVwriter
    {
        return new UnixCSVwriter();
    }

    public function createJSONwriter(): JSONwriter
    {
        return new UnixJSONwriter();
    }
}