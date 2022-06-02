<?php
declare(strict_types=1);

namespace Creational\Builder;

/**
 *
 */
class Director
{

    public function build(Builder $builder): namespace\Parts\Vehicle
    {
        $builder->createVehicle();
        $builder->addDors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}