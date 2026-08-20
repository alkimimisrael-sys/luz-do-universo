<?php

namespace App\Http\Controllers;

use App\Models\Configuracao;
use App\Models\Depoimento;

class DepoimentosController extends Controller
{
    public function index()
    {
        $depoimentos = Depoimento::ativos()->paginate(9);
        $config      = Configuracao::todas();
        return view('pages.depoimentos', compact('depoimentos', 'config'));
    }
}
