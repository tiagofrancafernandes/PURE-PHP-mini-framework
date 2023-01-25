<?php

use App\Helpers\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\IndexController;

return [
    Route::make('home_page', '/', [IndexController::class]),
    Route::get('api_articles_collection', '/api/articles', [ArticleController::class, 'getAll']),
    Route::get('api_articles', '/api/articles/{id}', [ArticleController::class, 'get']),
];
