<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrabalhoController extends Controller
{
    public function index()
    {
        return view('trabalhos.index'); // A visão deve estar em resources/views/trabalhos/index.blade.php
    }
}