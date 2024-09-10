<?php

namespace App\Http\Middleware;

    use Closure;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    
    class AdminMiddleware
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
            // Verificar se o usuário está autenticado
            if (Auth::check()) {
                // Verificar se o usuário é um admin
                if (Auth::user()->is_admin) {
                    return $next($request);
                }
            }
    
            // Se o usuário não for admin, redirecionar
            return redirect('/')->with('error', 'Você não tem permissão para acessar esta página.');
        }
    }
    

