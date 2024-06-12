<?php

use App\Controllers\Auth\AuthController;
use App\Controllers\UserController;

$router->get('/', function () {
    view('index');
});

$router->get('/users', [new UserController(), 'index']);
$router->post('/users', [new UserController(), 'store']);
$router->get('/register', [new AuthController(), 'register']);

$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);