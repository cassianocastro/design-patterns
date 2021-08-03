<?php
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

use Comportamental\NullObject\Test as NullObject;
use Estrutural\DependencyInjection\Test as DI;

ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

require_once './Loader.php';

echo "<pre>";

echo "<h2>FactoryMethod:</h2>";
$factoryMethodTest = new FactoryMethod();
$factoryMethodTest->canCreateStdoutLogging();
$factoryMethodTest->canCreateFileLogging();

echo "<h2>SimpleFactory:</h2>";
$bicyle = (new SimpleFactory())->createBicycle();
$bicyle->driveTo("Porto Alegre");


echo "<h2>Singleton:</h2>";
$firstCall  = Singleton::getInstance();
$secondCall = Singleton::getInstance();

if ($firstCall === $secondCall):
    echo "Mesma intância.";
endif;

echo "<h2>StaticFactory:</h2>";
$staticFactoryTest = new StaticFactory();
$staticFactoryTest->testCanCreateNumberFormatter();
$staticFactoryTest->testCanCreateStringFormatter();
$staticFactoryTest->testException();

echo "<h2>AbstractFactory:</h2>";
$abstractFactory = new AbstractFactory();
print "Unix:\n";
$abstractFactory->canCreateCSVwriter(new UnixWriterFactory());
print "Windows:\n";
$abstractFactory->canCreateCSVwriter(new WindowsWriterFactory());

echo "<h2>Pool:</h2>";
$pool = new Pool();
$pool->canGetNewInstanceWithGet();
$pool->canGetSameInstanceTwiceWhenDisposingItFirst();

echo "<h2>Prototype:</h2>";
$proto = new Prototype();
$proto->canGetFooBook();

echo "<h2>Object NULL:</h2>";
$nullObject = new NullObject();
$nullObject->testNullObject();
$nullObject->testStdLogger();

echo "<h2>Dependency Injection:</h2>";
$di = (new DI())->testDependencyInjection();


echo "</pre>";
?>
