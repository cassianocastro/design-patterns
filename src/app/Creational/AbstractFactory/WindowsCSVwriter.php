<?php
declare(strict_types=1);

namespace App\Creational\AbstractFactory;

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