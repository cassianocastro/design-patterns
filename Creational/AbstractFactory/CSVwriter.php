<?php
namespace Creational\AbstractFactory;

/**
 *
 */
interface CSVwriter
{
    public function write(array $line): string;
    
}

?>
