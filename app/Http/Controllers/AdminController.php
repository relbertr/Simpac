<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Exibir a página de administração.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('admin.index'); // Certifique-se de que a visualização existe
    }
}

