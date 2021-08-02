<?php
namespace Creational\AbstractFactory;

/**
 *
 */
interface JSONwriter
{
    public function write(array $data, bool $formatted): string;
    
}

?>
