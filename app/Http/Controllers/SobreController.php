<?php

namespace App\Http\Controllers;

use App\Models\Configuracao;

class SobreController extends Controller
{
    public function index()
    {
        $config = Configuracao::todas();
        return view('pages.sobre', compact('config'));
    }
}
