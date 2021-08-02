<?php
namespace Creational\AbstractFactory;

/**
 *
 */
class Test
{

    public function canCreateCSVwriter(WriterFactory $writerFactory): void
    {
        echo __METHOD__ . ":" . PHP_EOL;
        var_dump($writerFactory->createJSONwriter() instanceof JSONwriter);
        var_dump($writerFactory->createCSVwriter() instanceof CSVwriter);
    }
}

?>
