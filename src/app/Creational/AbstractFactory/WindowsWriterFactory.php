<?php
declare(strict_types=1);

namespace App\Creational\AbstractFactory;

/**
 *
 */
class WindowsWriterFactory implements WriterFactory
{

    public function createJSONwriter(): JSONwriter
    {
        return new WindowsJSONwriter();
    }

    public function createCSVwriter(): CSVwriter
    {
        return new WindowsCSVwriter();
    }

}