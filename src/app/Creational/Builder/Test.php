<?php
declare(strict_types=1);

namespace Creational\Builder;

use Creational\Builder\{
    TruckBuilder,
    CarBuilder,
    Director,
    Parts\Car,
    Parts\Truck
};

/**
 *
 */
class Test
{

    public function canBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle   = (new Director())->build($truckBuilder);

        echo __METHOD__, ":", PHP_EOL;
        var_dump($newVehicle instanceof Truck);
    }

    public function canBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        echo __METHOD__, ":", PHP_EOL;
        var_dump($newVehicle instanceof Car);
    }
}