<?php
declare(strict_types=1);

namespace Tests\Creational;

use App\Creational\Prototype\{ BarBookPrototype, FooBookPrototype };
use PHPUnit\Framework\TestCase;

/**
 *
 */
final class PrototypeTest extends TestCase
{

    /**
     * @test
     */
    public function canGetFooBook(): void
    {
        $fooPrototype = new FooBookPrototype();
        $barPrototype = new BarBookPrototype();

        for ( $i = 0; $i < 10; $i++ )
        {
            $book = clone $fooPrototype;
            $book->setTitle("Foo Book Nº " . $i + 1);

            self::assertInstanceOf(FooBookPrototype::class, $book);
        }

        for ( $i = 0; $i < 5; $i++ )
        {
            $book = clone $barPrototype;
            $book->setTitle("Bar Book Nº " . $i + 1);

            self::assertInstanceOf(BarBookPrototype::class, $book);
        }
    }
}