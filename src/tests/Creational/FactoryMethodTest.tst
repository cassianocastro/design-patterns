<?php
declare(strict_types=1);

namespace Tests\Creational;

use App\Creational\FactoryMethod\{
    FileLogger,
    FileLoggerFactory,
    StdoutLogger,
    StdoutLoggerFactory
};
use PHPUnit\Framework\TestCase;

/**
*
*/
final class FactoryMethodTest extends TestCase
{

    /**
     * @test
     */
    public function canCreateStdoutLogging(): void
    {
        $logger = (new StdoutLoggerFactory())->createLogger();

        self::assertInstanceOf(StdoutLogger::class, $logger);
    }

    /**
     * @test
     */
    public function canCreateFileLogging(): void
    {
        $logger = (new FileLoggerFactory(sys_get_temp_dir()))->createLogger();

        self::assertInstanceOf(FileLogger::class, $logger);
    }
}