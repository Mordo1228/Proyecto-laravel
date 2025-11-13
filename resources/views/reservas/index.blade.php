@extends('layouts.app')

@section('content')
<h2>Reservas</h2>
<a href="{{ route('reservas.create') }}" class="btn btn-success mb-2">Nueva Reserva</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Espacio</th>
            <th>Solicitante</th>
            <th>Fecha</th>
            <th>Hora Inicio</th>
            <th>Hora Fin</th>
            <th>Motivo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($reservas as $reserva)
        <tr>
            <td>{{ $reserva->id }}</td>
            <td>{{ $reserva->espacio->nombre }}</td>
            <td>{{ $reserva->solicitante }}</td>
            <td>{{ $reserva->fecha }}</td>
            <td>{{ $reserva->hora_inicio }}</td>
            <td>{{ $reserva->hora_fin }}</td>
            <td>{{ $reserva->motivo }}</td>
            <td>
                <a href="{{ route('reservas.edit', $reserva) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('reservas.destroy', $reserva) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar reserva?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $reservas->links() }}
@endsection
