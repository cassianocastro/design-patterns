<?php
declare(strict_types=1);

namespace App\Behavioral\Mediator;

/**
 *
 */
interface Mediator
{

    public function getUser(string $userName): string;

}