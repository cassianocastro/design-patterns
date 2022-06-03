<?php
declare(strict_types=1);

namespace App\Creational\Builder;

/**
 *
 */
class Director
{

    public function build(Builder $builder): Parts\Vehicle
    {
        $builder->createVehicle();
        $builder->addDors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}