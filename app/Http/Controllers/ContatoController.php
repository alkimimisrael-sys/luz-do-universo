<?php

namespace App\Http\Controllers;

use App\Models\Configuracao;

class ContatoController extends Controller
{
    public function index()
    {
        $config = Configuracao::todas();
        return view('pages.contato', compact('config'));
    }
}
