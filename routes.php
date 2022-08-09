<?php

use App\Helpers\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\IndexController;

return [
    Route::make('home_page', '/', [IndexController::class]),
    new \DevCoder\Route('api_articles_collection', '/api/articles', [ArticleController::class, 'getAll']),
    new \DevCoder\Route('api_articles', '/api/articles/{id}', [ArticleController::class, 'get']),
];
