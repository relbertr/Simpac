<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin.index'); // Página de Administrador
})->name('admin');

Route::get('/avaliadores', function () {
    return view('avaliadores.index'); // Página de Avaliadores
})->name('avaliadores');

Route::get('/resultados', function () {
    return view('resultados.index'); // Página de Resultados
})->name('resultados');

Route::get('/Trabalhos', function () {
    return view('Trabalhos.index');
})->name('Trabalhos');