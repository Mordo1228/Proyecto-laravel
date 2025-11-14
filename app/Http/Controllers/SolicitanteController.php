<?php

namespace App\Http\Controllers;

use App\Models\Solicitante;
use Illuminate\Http\Request;

class SolicitanteController extends Controller
{
    public function index()
    {
        $solicitantes = Solicitante::paginate(10);
        return view('solicitantes.index', compact('solicitantes'));
    }

    public function create()
    {
        return view('solicitantes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'nullable|email',
            'telefono' => 'nullable|string|max:20'
        ]);

        Solicitante::create($request->all());

        return redirect()->route('solicitantes.index')
            ->with('success', 'Solicitante creado correctamente.');
    }

    public function edit(Solicitante $solicitante)
    {
        return view('solicitantes.edit', compact('solicitante'));
    }

    public function update(Request $request, Solicitante $solicitante)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'nullable|email',
            'telefono' => 'nullable|string|max:20'
        ]);

        $solicitante->update($request->all());

        return redirect()->route('solicitantes.index')
            ->with('success', 'Solicitante actualizado correctamente.');
    }

    public function destroy(Solicitante $solicitante)
    {
        $solicitante->delete();
        return redirect()->route('solicitantes.index')
            ->with('success', 'Solicitante eliminado correctamente.');
    }
}
