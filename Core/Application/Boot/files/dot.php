<?php

use Core\Application\Boot\Init;
use Core\Immutable;

require_once __DIR__ . '/../Init.php';

$dot = function (Immutable $app) {
    $dotenvInstance = $app->get('env');
    if (!$dotenvInstance || !is_object($dotenvInstance) || get_class($dotenvInstance) != \Dotenv\Dotenv::class) {
        $dotenvInstance = \Dotenv\Dotenv::createImmutable(
            __DIR__ . '/../../../../'
        );

        $app->put('env', $dotenvInstance, true);
    }

    return $dotenvInstance;
};

$dotenv = $dot(Init::app());

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

$dotenv->required(['DEBUG_ENABLED'])->isBoolean(); //Para integer utilize isInteger()
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
