<?php

declare(strict_types=1);

use App\Database\QueryBuilder;
use App\Database\Connection;
use Symfony\Component\Dotenv\Dotenv;

require __DIR__ . '/vendor/autoload.php';
$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env');

$config = require __DIR__ . '/config.php';


$database = new QueryBuilder(
    Connection::make($config['driver'], $config['host'], $config['database'], $config['username'], $config['password'])
);
