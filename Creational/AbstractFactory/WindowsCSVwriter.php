<?php
namespace Creational\AbstractFactory;

/**
 *
 */
class WindowsCSVwriter implements CSVwriter
{

    public function write(array $line): string
    {
        return join(",", $line) . "\r\n";
    }
}

?>
