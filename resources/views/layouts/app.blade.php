<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Espacios y Reservas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<nav class="mb-4">
    <a href="{{ route('espacios.index') }}" class="btn btn-primary">Espacios</a>
    <a href="{{ route('reservas.index') }}" class="btn btn-secondary">Reservas</a>
</nav>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@yield('content')

</body>
</html>
