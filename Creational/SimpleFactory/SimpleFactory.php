<?php
namespace Creational\SimpleFactory;

/*
SimpleFactory (Fábrica Simples) é uma implementação mais simples do padrão fábrica.
Diferencia-se do padrão de Fábrica Estática porque não é estático. Assim sendo,
você precisa ter múltiplas fábricas, diferentemente parametrizadas, você pode ter
subclasses disto e pode simular isto. Este padrão deve ser sempre preferido sobre
o padrão de Fábrica Estática!
*/

class SimpleFactory
{

	public function createBicycle(): Bicycle
	{
		return new Bicycle();
	}
}
?>
