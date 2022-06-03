<?php
declare(strict_types=1);

namespace Tests\Creational;

use App\Creational\AbstractFactory\{
    CSVwriter,
    JSONwriter,
    UnixWriterFactory,
    WindowsWriterFactory,
    WriterFactory
};
use PHPUnit\Framework\TestCase;

/**
 *
 */
final class AbstractFactoryTest extends TestCase
{

    /**
     *
     */
    public function provideFactory(): iterable
    {
        return [
            [new WindowsWriterFactory()],
            [new UnixWriterFactory()]
        ];
    }

    /**
     * @test
     * @dataProvider provideFactory
     */
    public function canCreateCSVwriter(WriterFactory $factory): void
    {
        self::assertInstanceOf(
            CSVwriter::class, $factory->createCSVwriter()
        );
    }

    /**
     * @test
     * @dataProvider provideFactory
     */
    public function canCreateJSONwriter(WriterFactory $factory): void
    {
        self::assertInstanceOf(
            JSONWriter::class, $factory->createJSONwriter()
        );
    }
}