<?php

namespace Alura\Pdo\Infrastructure\Persistence;
use PDO;

class ConnectionCreator {
	public static function createConnection(): \PDO{
		$databasePAth = __DIR__ . '/../../../banco.sqlite';
		return new PDO('sqlite:' . $databasePAth);
	}
}
