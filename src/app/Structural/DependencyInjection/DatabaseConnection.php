<?php
declare(strict_types=1);

namespace App\Structural\DependencyInjection;

/**
 *
 */
final class DatabaseConnection
{

    private DatabaseConfig $config;

    public function __construct(DatabaseConfig $config)
    {
        $this->config = $config;
    }

    public function getDsn(): string
    {
        return sprintf(
            "%s:%s@:%s:%d",
            $this->config->getUserName(),
            $this->config->getPassword(),
            $this->config->getHost(),
            $this->config->getPort()
        );
    }
}