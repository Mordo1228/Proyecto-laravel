<div class="mb-3">
    <label>Nombre</label>
    <input type="text" name="nombre" class="form-control"
        value="{{ old('nombre', $solicitante->nombre ?? '') }}">

    @error('nombre') <div style="color:red">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label>Correo</label>
    <input type="email" name="correo" class="form-control"
        value="{{ old('correo', $solicitante->correo ?? '') }}">

    @error('correo') <div style="color:red">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label>Teléfono</label>
    <input type="text" name="telefono" class="form-control"
        value="{{ old('telefono', $solicitante->telefono ?? '') }}">

    @error('telefono') <div style="color:red">{{ $message }}</div> @enderror
</div>
