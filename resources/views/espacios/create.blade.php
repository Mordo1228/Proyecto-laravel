@extends('layouts.app')

@section('content')
<h2>Nuevo Espacio</h2>
<form action="{{ route('espacios.store') }}" method="POST">
    @csrf
    @include('espacios.partials.form')
    <button type="submit" class="btn btn-primary">GUARDAR</button>
</form>
@endsection
