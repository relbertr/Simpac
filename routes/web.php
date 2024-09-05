<?php

use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
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
=======
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
>>>>>>> 95f23c6410822de96935fe2fddd9cd3957c76717
