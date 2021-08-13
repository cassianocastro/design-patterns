<?php
namespace Creational;
use Creational\{
    FactoryMethod\Test as FactoryMethod,
    SimpleFactory\Bicycle,
    SimpleFactory\SimpleFactory,
    Singleton\Singleton,
    StaticFactory\Test as StaticFactory,
    AbstractFactory\Test as AbstractFactory,
    AbstractFactory\UnixWriterFactory,
    AbstractFactory\WindowsWriterFactory,
    Pool\Test as Pool,
    Prototype\Test as Prototype
};
/**
 *
 */
class CreationalFacade
{

    public function FactoryMethod(): void
    {
        echo "<h3>FactoryMethod:</h3>";
        $factoryMethodTest = new FactoryMethod();
        $factoryMethodTest->canCreateStdoutLogging();
        $factoryMethodTest->canCreateFileLogging();
    }

    public function SimpleFactory(): void
    {
        echo "<h3>SimpleFactory:</h3>";
        $bicyle = (new SimpleFactory())->createBicycle();
        $bicyle->driveTo("Porto Alegre");
    }

    public function Singleton(): void
    {
        echo "<h3>Singleton:</h3>";
        $firstCall  = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        if ($firstCall === $secondCall):
            echo "Mesma intância.";
        endif;
    }

    public function StaticFactory(): void
    {
        echo "<h3>StaticFactory:</h3>";
        $staticFactoryTest = new StaticFactory();
        $staticFactoryTest->testCanCreateNumberFormatter();
        $staticFactoryTest->testCanCreateStringFormatter();
        $staticFactoryTest->testException();
    }

    public function AbstractFactory(): void
    {
        echo "<h3>AbstractFactory:</h3>";
        $abstractFactory = new AbstractFactory();
        print "Unix:\n";
        $abstractFactory->canCreateCSVwriter(new UnixWriterFactory());
        print "Windows:\n";
        $abstractFactory->canCreateCSVwriter(new WindowsWriterFactory());
    }

    public function Pool(): void
    {
        echo "<h3>Pool:</h3>";
        $pool = new Pool();
        $pool->canGetNewInstanceWithGet();
        $pool->canGetSameInstanceTwiceWhenDisposingItFirst();
    }

    public function Prototype(): void
    {
        echo "<h3>Prototype:</h3>";
        $proto = new Prototype();
        $proto->canGetFooBook();
    }

}

?>
