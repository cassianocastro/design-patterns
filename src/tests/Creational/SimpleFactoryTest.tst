<?php
declare(strict_types=1);

namespace Tests\Creational;

use App\Creational\SimpleFactory\{ Bicycle, SimpleFactory };
use PHPUnit\Framework\TestCase;

/**
 *
 */
final class SimpleFactoryTest extends TestCase
{

    /**
     * @test
     */
	public function instanceOfBicycle(): void
	{
		$bicycle = (new SimpleFactory())->createBicycle();

		self::assertInstanceOf(Bicycle::class, $bicycle);
	}
}