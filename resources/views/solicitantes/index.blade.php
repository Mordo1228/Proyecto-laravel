@extends('layouts.app')

@section('content')
    <h1>Solicitantes</h1>

    <a href="{{ route('solicitantes.create') }}" class="btn btn-success mb-3">Nuevo Solicitante</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($solicitantes as $sol)
            <tr>
                <td>{{ $sol->id }}</td>
                <td>{{ $sol->nombre }}</td>
                <td>{{ $sol->telefono }}</td>
                <td>{{ $sol->correo }}</td>
                <td>
                    <a href="{{ route('solicitantes.edit', $sol) }}" class="btn btn-warning btn-sm">Editar</a>

                    <form action="{{ route('solicitantes.destroy', $sol) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

