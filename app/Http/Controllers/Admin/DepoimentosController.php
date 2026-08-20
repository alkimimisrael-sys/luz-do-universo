<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Depoimento;
use Illuminate\Http\Request;

class DepoimentosController extends Controller
{
    public function index()
    {
        $depoimentos = Depoimento::latest()->paginate(15);
        return view('admin.depoimentos.index', compact('depoimentos'));
    }

    public function create()
    {
        return view('admin.depoimentos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome'       => 'required|string|max:100',
            'parentesco' => 'nullable|string|max:80',
            'texto'      => 'required|string|max:1000',
            'nota'       => 'required|integer|min:1|max:5',
            'ativo'      => 'boolean',
        ]);

        $validated['ativo'] = $request->boolean('ativo');

        Depoimento::create($validated);

        return redirect()->route('admin.depoimentos.index')
            ->with('success', 'Depoimento criado com sucesso!');
    }

    public function edit(Depoimento $depoimento)
    {
        return view('admin.depoimentos.edit', compact('depoimento'));
    }

    public function update(Request $request, Depoimento $depoimento)
    {
        $validated = $request->validate([
            'nome'       => 'required|string|max:100',
            'parentesco' => 'nullable|string|max:80',
            'texto'      => 'required|string|max:1000',
            'nota'       => 'required|integer|min:1|max:5',
            'ativo'      => 'boolean',
        ]);

        $validated['ativo'] = $request->boolean('ativo');

        $depoimento->update($validated);

        return redirect()->route('admin.depoimentos.index')
            ->with('success', 'Depoimento atualizado com sucesso!');
    }

    public function destroy(Depoimento $depoimento)
    {
        $depoimento->delete();
        return redirect()->route('admin.depoimentos.index')
            ->with('success', 'Depoimento excluído com sucesso!');
    }

    public function toggleAtivo(Depoimento $depoimento)
    {
        $depoimento->update(['ativo' => !$depoimento->ativo]);
        return redirect()->back()
            ->with('success', 'Status do depoimento atualizado!');
    }
}
