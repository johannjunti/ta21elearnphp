<?php

use App\Controllers\PostsController;
use App\Controllers\PublicController;
use App\Router;

Router::get('/', [PublicController::class, 'index']);

Router::get('/about', [PublicController::class, 'about']);

Router::get('/form', [PublicController::class, 'form']);

Router::post('/form', [PublicController::class, 'formPost']);



Router::get('/admin/posts', [PostsController::class, 'index']);