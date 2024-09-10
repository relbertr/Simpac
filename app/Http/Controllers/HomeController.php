<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Exibe a página inicial.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('admin.index'); // Alterado para exibir a visualização 'admin.index'
    }
}
