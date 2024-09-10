<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Verifique se o usuário está autenticado e se é um administrador
        if (Auth::check() && Auth::user()->is_admin) {
            return $next($request);
        }

        // Redirecionar para a página de login ou uma página de acesso negado
        return redirect()->route('login')->with('error', 'Você não tem permissão para acessar esta página.');
    }
}

