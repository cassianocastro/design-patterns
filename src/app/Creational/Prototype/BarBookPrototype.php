<?php
declare(strict_types=1);

namespace App\Creational\Prototype;

/**
 *
 */
class BarBookPrototype extends BookPrototype
{

    protected string $category;

    public function __construct()
    {
        $this->category = "Bar";
    }

    public function __clone() {}
}