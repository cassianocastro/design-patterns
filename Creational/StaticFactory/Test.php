<?php
namespace Creational\StaticFactory;
use InvalidArgumentException;

/**
*
*/
class Test
{

	public function testCanCreateNumberFormatter()
	{
		echo __METHOD__ . ":" . PHP_EOL;
		var_dump(StaticFactory::factory('number') instanceof FormatNumber);
	}

	public function testCanCreateStringFormatter()
	{
		echo __METHOD__ . ":" . PHP_EOL;
		var_dump(StaticFactory::factory('string') instanceof FormatString);
	}

	public function testException()
	{
		echo __METHOD__ . ":" . PHP_EOL;
		try {
			StaticFactory::factory('object');
		} catch (\Exception $e) {
			echo $e->getMessage();
		}
	}
}
?>
