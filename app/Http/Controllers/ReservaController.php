<?php


namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Espacio;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function index()
    {
        $reservas = Reserva::with('espacio')->paginate(10);
        return view('reservas.index', compact('reservas'));
    }

    public function create()
    {
        $espacios = Espacio::all();
        return view('reservas.create', compact('espacios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'espacio_id' => 'required|exists:espacios,id',
            'solicitante' => 'required|string|max:255',
            'fecha' => 'required|date',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_fin' => 'required|date_format:H:i',
            'motivo' => 'nullable|string|max:255',
        ]);

        Reserva::create($request->all());

        return redirect()->route('reservas.index')
            ->with('success', 'Reserva creada correctamente.');
    }

    public function edit(Reserva $reserva)
    {
        $espacios = Espacio::all();
        return view('reservas.edit', compact('reserva', 'espacios'));
    }

public function update(Request $request, Reserva $reserva)
{
    $request->validate([
        'espacio_id'   => 'required|exists:espacios,id',
        'solicitante'  => 'required|string|max:255',
        'fecha'        => 'required|date',
        'hora_inicio'  => 'required|date_format:H:i',
        'hora_fin'     => 'required|date_format:H:i',
        'motivo'       => 'nullable|string|max:255',
    ], [
        'espacio_id.required'  => 'Por favor selecciona un espacio.',
        'espacio_id.exists'    => 'El espacio seleccionado no es válido.',
        'solicitante.required' => 'Debes ingresar el nombre del solicitante.',
        'solicitante.string'   => 'El nombre del solicitante debe ser texto.',
        'solicitante.max'      => 'El nombre del solicitante no puede tener más de 255 caracteres.',
        'fecha.required'       => 'Debes ingresar una fecha para la reserva.',
        'fecha.date'           => 'La fecha ingresada no es válida.',
        'hora_inicio.required' => 'Debes indicar la hora de inicio.',
        'hora_inicio.date_format' => 'El formato de la hora de inicio no es válido .',
        'hora_fin.required'    => 'Debes indicar la hora de finalización.',
        'hora_fin.date_format' => 'El formato de la hora de fin no es válido .',
        'motivo.string'        => 'El motivo debe ser un texto.',
        'motivo.max'           => 'El motivo no puede tener más de 255 caracteres.',
    ]);

    // Actualiza la reserva con los nuevos datos
    $reserva->update($request->all());

    // Mensaje flash para confirmar la actualización
    return redirect()->route('reservas.index')
        ->with('success', 'La reserva fue actualizada correctamente.');
}


    public function destroy(Reserva $reserva)
    {
        $reserva->delete();

        return redirect()->route('reservas.index')
            ->with('success', 'Reserva eliminada correctamente.');
    }

    
}
