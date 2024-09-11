<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAvaliador
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
        // Verifique se o usuário está autenticado e é um avaliador
        if (Auth::check() && Auth::user()->is_avaliador) {
            return $next($request);
        }

        // Redireciona para a página de login se não for avaliador
        return redirect()->route('login');
    }
}
