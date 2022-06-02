<?php
declare(strict_types=1);

namespace Creational\AbstractFactory;

/**
 *
 */
interface CSVwriter
{
    public function write(array $line): string;

}