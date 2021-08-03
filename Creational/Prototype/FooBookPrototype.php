<?php
namespace Creational\Prototype;

/**
 *
 */
class FooBookPrototype extends BookPrototype
{

    protected string $category;

    public function __construct()
    {
        $this->category = "Foo";
    }

    public function __clone() {}
}

?>
