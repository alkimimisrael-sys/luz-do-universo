<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidatura;
use App\Models\Configuracao;
use App\Models\Contato;
use App\Models\Depoimento;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'depoimentos'   => Depoimento::count(),
            'ativos'        => Depoimento::where('ativo', true)->count(),
            'candidaturas'  => Candidatura::count(),
            'pendentes'     => Candidatura::where('status', 'pendente')->count(),
            'contatos'      => Contato::count(),
            'nao_lidos'     => Contato::where('lido', false)->count(),
        ];

        $ultimasCandidaturas = Candidatura::latest()->take(5)->get();
        $ultimosContatos     = Contato::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'ultimasCandidaturas', 'ultimosContatos'));
    }
}
