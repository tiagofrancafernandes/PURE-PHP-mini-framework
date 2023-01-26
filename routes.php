<?php

use App\Helpers\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PagesController;

return [
    /**
     * Estrutura das rotas:
     *
     * Route::make('abc', '/def', [ghi::class, 'jkl']),
     *
     * abc -> Nome da rota
     * def -> Caminho da rota (path/uri)
     * ghi -> Nome da classe Controller
     * jkl -> Nome do método na classe Controller
     *
     * Deve ser terminado com vírgula pois estamos em um array
     * # Exemplos:
     * Route::get('api_articles_collection', '/api/articles', [ArticleController::class, 'getAll']),
     * Route::get('api_articles', '/api/articles/{id}', [ArticleController::class, 'get']),
     *
     * MAis informações em https://github.com/devcoder-xyz/php-router#readme
     */

    Route::make('index', '/', [PagesController::class, 'index']),
    Route::make('quem-somos', '/quem-somos', [PagesController::class, 'quemSomos']),
    Route::make('unixconta', '/unixconta', [PagesController::class, 'unixconta']),
    Route::make('unixinvesti', '/unixinvesti', [PagesController::class, 'unixinvesti']),
];
