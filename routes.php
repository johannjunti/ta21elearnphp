<?php

use App\Controllers\PublicController;
use App\Router;

Router::addRoute('/', [PublicController::class, 'index']);

Router::addRoute('/about', [PublicController::class, 'about']);

Router::addRoute('/form', [PublicController::class, 'form']);