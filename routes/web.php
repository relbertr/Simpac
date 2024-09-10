<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrabalhoController;

Route::get('/', function () {
    return view('welcome'); // ou o nome da sua página inicial
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


Route::get('/trabalhos', [TrabalhoController::class, 'index'])->name('trabalhos');