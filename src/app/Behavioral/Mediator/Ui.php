<?php
declare(strict_types=1);

namespace App\Behavioral\Mediator;

/**
 *
 */
final class Ui extends Colleague
{

    public function outputUserInfo(string $userName): void
    {
        print $this->mediator->getUser($userName);
    }
}