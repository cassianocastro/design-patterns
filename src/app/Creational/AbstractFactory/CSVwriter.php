<?php
declare(strict_types=1);

namespace App\Creational\AbstractFactory;

/**
 *
 */
interface CSVwriter
{
    public function write(array $line): string;

}