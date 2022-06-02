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

	public function testInstanceOfBicycle(): void
	{

		$bicycle = (new SimpleFactory())->createBicycle();

		self::assertInstanceOf(Bicycle::class, $bicycle);
	}
}