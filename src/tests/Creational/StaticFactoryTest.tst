<?php
declare(strict_types=1);

namespace Tests\Creational;

use InvalidArgumentException;
use App\Creational\StaticFactory\{ FormatNumber, FormatString, StaticFactory };
use PHPUnit\Framework\TestCase;

/**
*
*/
final class StaticFactoryTest extends TestCase
{

    /**
     * @test
     */
	public function canCreateNumberFormatter(): void
	{
        self::assertInstanceOf(
            FormatNumber::class, StaticFactory::factory("number")
        );
	}

    /**
     * @test
     */
	public function canCreateStringFormatter(): void
	{
        self::assertInstanceOf(
            FormatString::class, StaticFactory::factory("string")
        );
	}

    /**
     * @test
     */
	public function canThrowException(): void
	{
        $this->expectException(InvalidArgumentException::class);

        StaticFactory::factory("object");
	}
}