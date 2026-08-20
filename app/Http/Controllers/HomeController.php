<?php

namespace App\Http\Controllers;

use App\Models\Configuracao;
use App\Models\Depoimento;

class HomeController extends Controller
{
    public function index()
    {
        $depoimentos = Depoimento::ativos()->take(6)->get();
        $config      = Configuracao::todas();

        return view('pages.home', compact('depoimentos', 'config'));
    }
}
