<?php
declare(strict_types=1);

namespace App\Structural\Composite;

/**
 *
 */
interface Renderable
{

    public function render(): string;
}