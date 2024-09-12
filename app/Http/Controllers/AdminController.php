<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Exibe a página de administração.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Adicione a lógica de autorização necessária para o administrador aqui
        // Por exemplo, você pode verificar se o usuário tem um papel de administrador

        if (Auth::check() && Auth::user()->is_admin) {
            return view('admin.index'); // View de administração
        }

        // Redireciona para a página inicial ou página de erro se não for autorizado
        return redirect('/')->with('error', 'Você não tem permissão para acessar esta página.');
    }
}
