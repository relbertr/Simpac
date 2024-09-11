<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAvaliador
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
        // Verifica se o usuário está autenticado e é um avaliador
        if ($request->user() && $request->user()->isAvaliador()) {
            return $next($request);
        }

        // Redireciona para a página inicial ou uma página de erro
        return redirect('/')->with('error', 'Acesso não autorizado.');
    }
}
