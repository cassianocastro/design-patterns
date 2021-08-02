<?php
use Creational\{
    FactoryMethod\Test as FactoryMethod,
    SimpleFactory\Bicycle,
    SimpleFactory\SimpleFactory,
    Singleton\Singleton,
    StaticFactory\Test as StaticFactory,
    AbstractFactory\Test as AbstractFactory,
    AbstractFactory\UnixWriterFactory,
    AbstractFactory\WindowsWriterFactory
};

use Comportamental\NullObject\Test as NullObject;

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

echo "<h2>Object NULL:</h2>";
$nullObject = new NullObject();
$nullObject->testNullObject();
$nullObject->testStdLogger();
echo "</pre>";
?>
