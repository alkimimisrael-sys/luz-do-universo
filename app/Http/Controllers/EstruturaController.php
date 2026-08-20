<?php

namespace App\Http\Controllers;

use App\Models\Configuracao;

class EstruturaController extends Controller
{
    public function index()
    {
        $config = Configuracao::todas();
        return view('pages.estrutura', compact('config'));
    }
}
