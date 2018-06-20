<?php

namespace KamilPietrzkiewicz\Sargit\Php\Database\Schema\Resources;

use DatabaseRow;

class DatabaseTable
{
	private $rowCollection;
	
	public function __construct()
	{
		$this->rowCollection = new DatabaseRowsCollection();
	}
	
	public function appendRowCollection(DatabaseRow $dbRow)
	{
		$this->rowCollection->append($dbRow);
	}
	
	
}
