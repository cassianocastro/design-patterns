<?php
declare(strict_types=1);

namespace Creational\Singleton;

use Exception;

/**
 * CONSIDERADO UM ANTI-PATTERN! PARA MELHOR TESTABILIDADE E MANUTENIBILIDADE USE INJEÇÃO DEPENDÊNCIAS!
 * Ter uma única instância da classe na aplicação que será responsável por gerenciar todas as chamadas a ela.

 * Conexão ao banco de dados (DB Connector)
 * Logger
 * Arquivo de lock para a aplicação (existe apenas um em todo o sistema de arquivos …)
 */
final class Singleton
{
	
	private static ?Singleton $instance = null;

	private function __construct() {}

	private function __clone(){}

	public function __wakeup(){
		throw new Exception("Cannot unserialize Singleton");
	}

	public static function getInstance(): Singleton
	{
		if ( is_null(static::$instance) ) {
			static::$instance = new static();
		}
		return static::$instance;
	}

}
