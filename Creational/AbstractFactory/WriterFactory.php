<?php
namespace Creational\AbstractFactory;

/**
 *
 */
interface WriterFactory
{
    public function createJSONwriter(): JSONwriter;

    public function createCSVwriter(): CSVwriter;

}

?>
