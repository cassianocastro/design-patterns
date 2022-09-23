<?php
declare(strict_types=1);

namespace Tests\Structural;

use PHPUnit\Framework\TestCase;
use App\Structural\Composite\{ Form, InputElement, TextElement };

/**
 *
 */
final class CompositeTest extends TestCase
{

    /**
     * @test
     */
    public function canRender(): void
    {
        $form = new Form();
        $form->addElement(new TextElement("Email:"));
        $form->addElement(new InputElement());

        $embed = new Form();
        $embed->addElement(new TextElement("Password:"));
        $embed->addElement(new InputElement());

        $form->addElement($embed);

         $this->assertSame(
            '<form>Email:<input type="text"/><form>Password:<input type="text"/></form></form>',
            $form->render()
        );
    }
}