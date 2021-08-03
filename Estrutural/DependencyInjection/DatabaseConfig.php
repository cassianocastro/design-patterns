<?php
namespace Estrutural\DependencyInjection;

/**
 *
 */
class DatabaseConfig
{

    private string $host;
    private string $username;
    private string $password;
    private int $port;

    function __construct(string $host, string $username, string $password, int $port)
    {
        $this->host     = $host;
        $this->username = $username;
        $this->password = $password;
        $this->port     = $port;
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function getUserName(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getPort(): int
    {
        return $this->port;
    }

}

?>
