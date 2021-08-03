<?php
namespace Creational\Prototype;

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

?>
