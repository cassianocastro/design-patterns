<?php
namespace Creational\FactoryMethod;
/**
*
*/
class Test
{

    public function canCreateStdoutLogging()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();

        echo __METHOD__ . ":" . PHP_EOL;
        var_dump($logger instanceof StdoutLogger);
    }

    public function canCreateFileLogging()
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();

        echo __METHOD__ . ":" . PHP_EOL;
        var_dump($logger instanceof FileLogger);
    }
}

?>
