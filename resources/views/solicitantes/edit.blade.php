@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Solicitante</h2>

    <form action="{{ route('solicitantes.update', $solicitante) }}" method="POST">
        @csrf
        @method('PUT')

        @include('solicitantes.partials.form')

        <button class="btn btn-success">Actualizar</button>
        <a href="{{ route('solicitantes.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
