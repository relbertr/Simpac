<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Exibir o formulário de cadastro.
     *
     * @return \Illuminate\View\View
     */
    public function exibirFormulario()
    {
        return view('cadastrar'); // Nome do arquivo de visualização
    }

    /**
     * Processar o cadastro do usuário.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function cadastrarUsuario(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed', // 'confirmed' é para validar o campo 'password_confirmation'
        ]);

        // Criar um novo usuário
        $usuario = new User();
        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');
        $usuario->password = Hash::make($request->input('password')); // Hash da senha
        $usuario->is_admin = $request->has('is_admin') ? 1 : 0; // Verifica se o checkbox foi marcado

        // Salvar no banco de dados
        $usuario->save();

        // Redirecionar com sucesso
        return redirect()->route('exibir.formulario')->with('success', 'Usuário cadastrado com sucesso!');
    }
}
