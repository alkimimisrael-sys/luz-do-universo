<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Configuracao;
use Illuminate\Http\Request;

class ConfiguracoesController extends Controller
{
    public function index()
    {
        $configuracoes = Configuracao::all()->keyBy('chave');
        return view('admin.configuracoes.index', compact('configuracoes'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'configuracoes'   => 'required|array',
            'configuracoes.*' => 'nullable|string|max:1000',
        ]);

        foreach ($request->configuracoes as $chave => $valor) {
            Configuracao::set($chave, $valor ?? '');
        }

        Configuracao::limparCache();

        return redirect()->route('admin.configuracoes.index')
            ->with('success', 'Configurações salvas com sucesso!');
    }
}
