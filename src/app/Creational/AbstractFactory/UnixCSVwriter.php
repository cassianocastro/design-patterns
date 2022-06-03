<?php
declare(strict_types=1);

namespace App\Creational\AbstractFactory;

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