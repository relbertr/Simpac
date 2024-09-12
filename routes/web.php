<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrabalhoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AvaliadorController;

// Página Inicial
Route::get('/', function () {
    return view('welcome'); // ou o nome da sua página inicial
});

// Página de Avaliadores (sem autenticação)
Route::middleware(['auth'])->group(function () {
    Route::get('/avaliadores', [AvaliadorController::class, 'index'])->name('avaliadores.index');
});

// Página de Resultados, acessível apenas para usuários autenticados
Route::middleware(['auth'])->group(function () {
    Route::get('/resultados', function () {
        return view('resultados.index'); // Página de Resultados
    })->name('resultados');

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/trabalhos', [TrabalhoController::class, 'index'])->name('trabalhos');
    Route::get('/cadastrar', [UserController::class, 'exibirFormulario'])->name('exibir.formulario');
    Route::post('/cadastrar', [UserController::class, 'cadastrarUsuario'])->name('cadastrar.usuario');
    
    // Páginas de Administrador, acessíveis apenas para admins
    Route::middleware(['admin'])->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin');
        // Outras rotas de admin
    });
});

// Rotas de Login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Rotas de Registro
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
