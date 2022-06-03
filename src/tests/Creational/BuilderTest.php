<?php
declare(strict_types=1);

namespace Tests\Creational;

use App\Creational\Builder\{ TruckBuilder, CarBuilder, Director };
use App\Creational\Builder\Parts\{ Car, Truck };
use PHPUnit\Framework\TestCase;

/**
 *
 */
final class BuilderTest extends TestCase
{

    /**
     * @test
     */
    public function canBuildTruck(): void
    {
        $builder    = new TruckBuilder();
        $newVehicle = (new Director())->build($builder);

        self::assertInstanceOf(Truck::class, $newVehicle);
    }

    /**
     * @test
     */
    public function canBuildCar(): void
    {
        $builder    = new CarBuilder();
        $newVehicle = (new Director())->build($builder);

        self::assertInstanceOf(Car::class, $newVehicle);
    }
}