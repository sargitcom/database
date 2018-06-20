<?php

namespace KamilPietrzkiewicz\Sargit\Php\Database\Schema\InterfaceList\Database;

interface Driver
{
	public function connectToDatabase(
		string $host, 
		string $port, 
		string $databaseName, 
		string $login, 
		string $password
	) : bool;
	
	public function getSchema() : DatabaseSchemaCollection
}
