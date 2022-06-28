<?php
declare(strict_types=1);

namespace App\Behavioral\NullObject;

/**
 *
 */
final class NullLogger implements Logger
{

    public function log(string $str): void
    {
        // do nothing...
    }
}