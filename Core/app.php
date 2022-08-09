<?php
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

define('CORE_CONFIG', require_once __DIR__ . '/config.php');

$dotenv = \Dotenv\Dotenv::createImmutable(CORE_CONFIG['app']['base_path']);
$dotenv->safeLoad();

/**
 * Booleanos obrigatórios
 */
$dotenv->required([
    'APP_HOST_BASE',
    'DB_HOST',
    'DB_NAME',
    'DB_USER',
    'DB_PASS',
]);

$dotenv->required(['DEBUG_ENABLED'])->isBoolean();//Para integer utilize isInteger()
$dotenv->required([
    'SESSION_TIMEOUT',
    'SOME_NUMBER_MAX',
])->isInteger();

/**
 * Valores com tipos específicos apenas se presente no .env
 */
$dotenv->ifPresent('DEBUG_QUERY')->isBoolean();

/**
 * Variáveis com valores aceitos
 */
$dotenv->required('DB_DRIVER')->allowedValues([
    'mysql',
    'pgsql',
]);

/**
 * Variáveis que não podem estar vazias
 */
$dotenv->required([
    'APP_NAME',
    'DB_HOST',
    'SECRET',
])->notEmpty();

app()->put('config', CORE_CONFIG);
