<?php

namespace App\Http\Controllers;

use App\Models\Cultivo;
use Illuminate\Http\Request;

class CultivoController extends Controller
{
    /**
     * Mostrar la lista de cultivos.
     */
    public function index()
    {
        $cultivos = Cultivo::all();

        return view('cultivos.index', compact('cultivos'));
    }

    /**
     * Mostrar el formulario para crear un cultivo.
     */
    public function create()
    {
        return view('cultivos.create');
    }

    /**
     * Guardar un nuevo cultivo.
     */
    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre' => 'required|string|max:255',
            'tipo' => 'required|string|max:255',
            'ubicacion' => 'nullable|string|max:255',
            'fecha_siembra' => 'required|date',
            'fecha_cosecha' => 'nullable|date|after_or_equal:fecha_siembra',
            'cantidad' => 'required|integer|min:1',
            'estado' => 'required|string|max:255',
        ]);

        Cultivo::create($datos);

        return redirect()
            ->route('cultivos.index')
            ->with('success', 'Cultivo registrado correctamente.');
    }

    /**
     * Mostrar un cultivo específico.
     */
    public function show(Cultivo $cultivo)
    {
        return view('cultivos.show', compact('cultivo'));
    }

    /**
     * Mostrar el formulario para editar un cultivo.
     */
    public function edit(Cultivo $cultivo)
    {
        return view('cultivos.edit', compact('cultivo'));
    }

    /**
     * Actualizar un cultivo.
     */
    public function update(Request $request, Cultivo $cultivo)
    {
        $datos = $request->validate([
            'nombre' => 'required|string|max:255',
            'tipo' => 'required|string|max:255',
            'ubicacion' => 'nullable|string|max:255',
            'fecha_siembra' => 'required|date',
            'fecha_cosecha' => 'nullable|date|after_or_equal:fecha_siembra',
            'cantidad' => 'required|integer|min:1',
            'estado' => 'required|string|max:255',
        ]);

        $cultivo->update($datos);

        return redirect()
            ->route('cultivos.index')
            ->with('success', 'Cultivo actualizado correctamente.');
    }

    /**
     * Eliminar un cultivo.
     */
    public function destroy(Cultivo $cultivo)
    {
        $cultivo->delete();

        return redirect()
            ->route('cultivos.index')
            ->with('success', 'Cultivo eliminado correctamente.');
    }
}