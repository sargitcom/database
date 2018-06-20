<?php

namespace KamilPietrzkiewicz\Sargit\Php\Database\Schema\Drivers;

use KamilPietrzkiewicz\Sargit\Php\Database\Schema\InterfaceList\Database\Driver as DbDriver;

class MysqlPdoQrzysio implements DbDriver 
{
	/**
	 * @var Db
	 */
	private $dbConnection;
	
	public function __construct()
	{
		require_once(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Configs' . DIRECTORY_SEPARATOR . 'config.php');
	}

	public function connectToDatabase(
		string $host, 
		string $port, 
		string $databaseName, 
		string $login, 
		string $password
	) : bool {
		$this->db = new Db();
	}
	
	public function getSchema() : DatabaseSchemaCollection
	{
		//$sql = 'SHOW TABLES';
		
		//$this->db->query($sql);
		
		
	}
}