<?php
declare(strict_types=1);

namespace Creational\Builder;

use Creational\Builder\Parts\{
    Door,
    Engine,
    Wheel,
    Car,
    Vehicle
};

/**
 *
 */
class CarBuilder implements Builder
{

    private Car $car;

    public function addDors()
    {
        $this->car->setPart("rightDoor", new Door());
        $this->car->setPart("leftDoor", new Door());
        $this->car->setPart("trunkLid", new Door());
    }

    public function addEngine()
    {
        $this->car->setPart("carEngine", new Engine());
    }

    public function addWheel()
    {
        $this->car->setPart("wheelLF", new Wheel());
        $this->car->setPart("wheelRF", new Wheel());
        $this->car->setPart("wheelLR", new Wheel());
        $this->car->setPart("wheelRR", new Wheel());
    }

    public function createVehicle()
    {
        $this->car = new Car();
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}