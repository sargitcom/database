<?php

namespace KamilPietrzkiewicz\Sargit\Php\Database\Schema;

use KamilPietrzkiewicz\Sargit\Php\Database\Schema\InterfaceList\DatabaseDriver;

class Get
{
	/**
	 * @var DatabaseDriver
	 */
	private $dbDriver;

	public function __construct(DatabaseDriver $dbDriver)
	{
		$this->dbDriver = $dbDriver;
	}

	public function getSchema() : DatabaseSchemaCollection
	{
		return $this->dbDriver->getSchema();
	}
}
