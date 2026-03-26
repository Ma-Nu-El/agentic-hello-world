<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Home';
});

Route::get('/hello', function () {
    return 'Hello from agent';
});

Route::get('/ping', function () {
    return 'pong';
});
