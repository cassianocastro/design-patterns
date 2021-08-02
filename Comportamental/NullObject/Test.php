<?php
namespace Comportamental\NullObject;

/**
 *
 */
class Test
{

    public function testNullObject()
    {
        $service = new Service(new NullLogger());
        $service->doSomething();
    }

    public function testStdLogger()
    {
        $service = new Service(new PrintLogger());
        $service->doSomething();
    }
}

?>
