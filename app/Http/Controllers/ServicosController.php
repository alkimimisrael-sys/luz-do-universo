<?php

namespace App\Http\Controllers;

use App\Models\Configuracao;

class ServicosController extends Controller
{
    public function index()
    {
        $config = Configuracao::todas();
        return view('pages.servicos', compact('config'));
    }
}
