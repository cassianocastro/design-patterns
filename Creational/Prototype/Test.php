<?php
namespace Creational\Prototype;

/**
 *
 */
class Test
{

    public function canGetFooBook(): void
    {
        $fooPrototype = new FooBookPrototype();
        $barPrototype = new BarBookPrototype();

        for ($i = 0; $i < 10; $i++) {
            $book = clone $fooPrototype;
            $book->setTitle("Foo Book Nº " . $i + 1);
            echo "<strong>{$book->getTitle()}:</strong>" . PHP_EOL;
            var_dump($book instanceof FooBookPrototype);
        }

        for ($i = 0; $i < 5; $i++) {
            $book = clone $barPrototype;
            $book->setTitle("Bar Book Nº " . $i + 1);
            echo "<strong>{$book->getTitle()}:</strong>" . PHP_EOL;
            var_dump($book instanceof BarBookPrototype);
        }
    }
}

?>
