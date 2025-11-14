@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Nuevo Solicitante</h2>

    <form action="{{ route('solicitantes.store') }}" method="POST">
        @csrf

        @include('solicitantes.partials.form')

        <button class="btn btn-primary">Guardar</button>
        <a href="{{ route('solicitantes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection

