<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;
$token = getVaultToken();
$getApiKeys = getApiKeys($token);
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => getenv('HOST'),
    'database' => getenv('DATABASE'),
    'username' => $getApiKeys['data']['key1'],
    'username' => $getApiKeys['data']['key1'],
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);

$capsule->setAsGlobal();

$capsule->bootEloquent();
