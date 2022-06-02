<?php
declare(strict_types=1);

namespace Creational\AbstractFactory;

/**
 *
 */
class WindowsJSONwriter implements JSONwriter
{

    public function write(array $data, bool $formatted): string
    {
        return json_encode($data, JSON_PRETTY_PRINT);
    }
}