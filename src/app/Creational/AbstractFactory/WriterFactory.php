<?php
declare(strict_types=1);

namespace Creational\AbstractFactory;

/**
 *
 */
interface WriterFactory
{
    public function createJSONwriter(): JSONwriter;

    public function createCSVwriter(): CSVwriter;

}