<?php

namespace App\Http\Controllers;

use App\Models\Parcela;
use Illuminate\Http\Request;

class ParcelaController extends Controller
{
    public function index()
    {
        $parcelas = Parcela::all();

        return view('parcelas.index', compact('parcelas'));
    }

    public function create()
    {
        return view('parcelas.create');
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre' => 'required|max:255',
            'ubicacion' => 'required|max:255',
            'hectareas' => 'required|numeric|min:0.1',
            'tipo_suelo' => 'required|max:255',
            'estado' => 'required|max:255',
        ]);

        Parcela::create($datos);

        return redirect()
            ->route('parcelas.index')
            ->with('success', 'Parcela registrada correctamente.');
    }

    public function show(Parcela $parcela)
    {
        return view('parcelas.show', compact('parcela'));
    }

    public function edit(Parcela $parcela)
    {
        return view('parcelas.edit', compact('parcela'));
    }

    public function update(Request $request, Parcela $parcela)
    {
        $datos = $request->validate([
            'nombre' => 'required|max:255',
            'ubicacion' => 'required|max:255',
            'hectareas' => 'required|numeric|min:0.1',
            'tipo_suelo' => 'required|max:255',
            'estado' => 'required|max:255',
        ]);

        $parcela->update($datos);

        return redirect()
            ->route('parcelas.index')
            ->with('success', 'Parcela actualizada correctamente.');
    }

    public function destroy(Parcela $parcela)
    {
        $parcela->delete();

        return redirect()
            ->route('parcelas.index')
            ->with('success', 'Parcela eliminada correctamente.');
    }
}