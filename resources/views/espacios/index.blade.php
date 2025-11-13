@extends('layouts.app')

@section('content')
<h2>Espacios</h2>
<a href="{{ route('espacios.create') }}" class="btn btn-success mb-2">Nuevo Espacio</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Capacidad</th>
            <th>Ubicación</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($espacios as $espacio)
        <tr>
            <td>{{ $espacio->id }}</td>
            <td>{{ $espacio->nombre }}</td>
            <td>{{ $espacio->tipo }}</td>
            <td>{{ $espacio->capacidad }}</td>
            <td>{{ $espacio->ubicacion }}</td>
            <td>
                <a href="{{ route('espacios.edit', $espacio) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('espacios.destroy', $espacio) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar espacio?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $espacios->links() }}
@endsection
