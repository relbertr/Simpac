<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * Exibe o formulário de login.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login'); // Certifique-se de que a visão existe em resources/views/auth/login.blade.php
    }

    /**
     * Processa a solicitação de login.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Redireciona baseado no tipo de usuário
            if ($user->isAvaliador()) {
                return redirect()->route('avaliadores'); // Redireciona para a página de avaliadores
            } elseif ($user->isAdmin()) {
                return redirect()->route('admin'); // Redireciona para a página de admin
            }

            return redirect()->intended('/'); // Redireciona para a página inicial ou outra página padrão
        }

        throw ValidationException::withMessages([
            'email' => ['As credenciais fornecidas estão incorretas.'],
        ]);
    }

    /**
     * Processa o logout.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
