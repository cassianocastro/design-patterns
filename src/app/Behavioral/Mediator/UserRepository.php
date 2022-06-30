<?php
declare(strict_types=1);

namespace App\Behavioral\Mediator;

/**
 *
 */
final class UserRepository extends Colleague
{

    public function getUserName(string $user): string
    {
        return "User: $user";
    }
}