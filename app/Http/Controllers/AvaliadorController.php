<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvaliadorController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'avaliador']); // Protege a rota com autenticação e verificação de avaliador
    }

    public function index()
    {
        return view('avaliadores.index'); // Retorna a view da página de avaliadores
    }
}
