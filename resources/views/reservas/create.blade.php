@extends('layouts.app')

@section('content')
<h2>Nueva Reserva</h2>
<form action="{{ route('reservas.store') }}" method="POST">
    @csrf
    @include('reservas.partials.form')
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
