<?php
declare(strict_types=1);

namespace App\Creational\SimpleFactory;

/**
*
*/
class Bicycle
{

	public function driveTo(string $destination)
	{
		echo "Drive to $destination.";
	}
}