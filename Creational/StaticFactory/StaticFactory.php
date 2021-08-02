<?php
namespace Creational\StaticFactory;
use InvalidArgumentException;

class StaticFactory
{

	public static function factory(string $type): Formatter
	{
		if ($type == 'number') {
			return new FormatNumber();
		} elseif ($type == 'string') {
			return new FormatString();
		}
		throw new InvalidArgumentException("Unknow Format given");
	}
}
?>
