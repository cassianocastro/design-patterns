<?php
declare(strict_types=1);

namespace App\Structural\Composite;

/**
 *
 */
final class TextElement implements Renderable
{

    private string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function render(): string
    {
        return $this->text;
    }
}