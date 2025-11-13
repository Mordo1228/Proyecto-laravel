@extends('layouts.app')

@section('content')
<h2>Editar Espacio</h2>
<form action="{{ route('espacios.update', $espacio) }}" method="POST">
    @csrf @method('PUT')
    @include('espacios.partials.form')
    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
@endsection
