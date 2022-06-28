<?php
declare(strict_types=1);

namespace App\Structural\DataMapper;

/**
 *
 */
final class UserFactory
{

    public function create(iterable $data): User
    {
        $name  = $data["name"];
        $email = $data["email"];

        // Do a validation with these data.

        return new User($name, $email);
    }
}