<div class="mb-3">
    <label>Nombre</label>
    <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $espacio->nombre ?? '') }}">
</div>

<div class="mb-3">
    <label>Tipo</label>
    <input type="text" name="tipo" class="form-control" value="{{ old('tipo', $espacio->tipo ?? '') }}">
</div>

<div class="mb-3">
    <label>Capacidad</label>
    <input type="number" name="capacidad" class="form-control" value="{{ old('capacidad', $espacio->capacidad ?? '') }}">
</div>

<div class="mb-3">
    <label>Ubicación</label>
    <input type="text" name="ubicacion" class="form-control" value="{{ old('ubicacion', $espacio->ubicacion ?? '') }}">
</div>
