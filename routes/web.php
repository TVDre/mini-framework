<?php


use Lib\Route;

Route::get('/', function() {
    echo "hola desde la pagina principal";
});

Route::get('/about', function() {
    echo "hola desde la pagina about";
});

Route::post('/contact', function() {
    echo "hola desde la pagina contact";
});

Route::dispatch();