<?php
declare(strict_types=1);

namespace App\Behavioral\NullObject;

/**
 *
 */
final class PrintLogger implements Logger
{

    public function log(string $str)
    {
        echo $str;
    }
}