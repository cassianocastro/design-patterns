<?php
namespace Creational\AbstractFactory;

/**
 *
 */
class UnixCSVwriter implements CSVwriter
{

    public function write(array $line): string
    {
        return join(",", $line) . "\n";
    }
}

?>
