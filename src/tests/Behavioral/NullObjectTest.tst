<?php
declare(strict_types=1);

namespace Tests\Behavioral;

use App\Behavioral\NullObject\{ PrintLogger, NullLogger, Service };
use PHPUnit\Framework\TestCase;

/**
 *
 */
final class NullObjectTest extends TestCase
{

    public function testNullObject()
    {
        $service = new Service(new NullLogger());
        $this->expectOutputString("");
        $service->doSomething();
    }

    public function testStdLogger()
    {
        $service = new Service(new PrintLogger());
        $this->expectOutputString(
            "Nós estamos no método" .
            " App\\Behavioral\\NullObject\\Service::doSomething"
        );
        $service->doSomething();
    }
}