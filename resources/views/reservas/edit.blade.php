@extends('layouts.app')

@section('content')
<h2>Editar Reserva</h2>

<form action="{{ route('reservas.update', $reserva) }}" method="POST">
    @csrf
    @method('PUT')
    @include('reservas.partials.form')
    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>

@endsection
