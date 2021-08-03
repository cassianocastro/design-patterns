<?php
namespace Estrutural\DependencyInjection;

/**
 *
 */
class Test
{

    public function testDependencyInjection(): void
    {
        $config = new DatabaseConfig("localhost", "root", "1234", 3306);
        $connection = new DatabaseConnection($config);

        echo __METHOD__ . ":" . PHP_EOL;
        var_dump('root:1234@:localhost:3306' === $connection->getDsn());
    }
}

?>
