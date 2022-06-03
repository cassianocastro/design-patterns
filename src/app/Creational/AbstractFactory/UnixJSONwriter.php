<?php
declare(strict_types=1);

namespace App\Creational\AbstractFactory;

/**
 *
 */
class UnixJSONwriter implements JSONwriter
{

    public function write(array $data, bool $formatted): string
    {
        $options = 0;

        if ( $formatted ) {
            $options = JSON_PRETTY_PRINT;
        }
        return json_encode($data, $options);
    }
}