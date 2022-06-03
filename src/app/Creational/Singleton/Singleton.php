<?php
declare(strict_types=1);

namespace App\Creational\Singleton;

use Exception;

/**
 *
 */
final class Singleton
{

	private static ?self $instance = NULL;

	private function __construct() {}

	private function __clone() {}

	public function __wakeup()
    {
		throw new Exception("Cannot unserialize Singleton");
	}

	static public function getInstance(): self
	{
		if ( is_null(self::$instance) )
        {
			self::$instance = new self();
		}
		return self::$instance;
	}
}