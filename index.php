<?php

require_once(__DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');
require_once(__DIR__ . DIRECTORY_SEPARATOR . 'autoload.php');

use KamilPietrzkiewicz\Sargit\Php\Database\Schema\Get as GetDbSchema;

$dbDriver = new MysqlPdoQrzysio();

$dbSchema = new GetDbSchema();
$dbSchema->getSchema();