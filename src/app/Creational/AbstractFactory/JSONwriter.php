<?php
declare(strict_types=1);

namespace App\Creational\AbstractFactory;

/**
 *
 */
interface JSONwriter
{
    public function write(array $data, bool $formatted): string;

}