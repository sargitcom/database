<?php

require_once(__DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');
require_once(__DIR__ . DIRECTORY_SEPARATOR . 'autoload.php');

use KamilPietrzkiewicz\Sargit\Php\Database\Schema\Drivers\MysqlPdoQrzysio as DbDriver;
use KamilPietrzkiewicz\Sargit\Php\Database\Schema\GetSchema as GetDbSchema;

$dbDriver = new DbDriver();

$dbSchema = new GetDbSchema($dbDriver);
$dbSchema = $dbSchema->getSchema();

