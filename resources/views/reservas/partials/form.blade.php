<div class="mb-3">
    <label>Espacio</label>
    <select name="espacio_id" class="form-control">
        <option value="">-- Selecciona un espacio --</option>
        @foreach ($espacios as $esp)
            <option value="{{ $esp->id }}" {{ (old('espacio_id', $reserva->espacio_id ?? '') == $esp->id) ? 'selected' : '' }}>
                {{ $esp->nombre }}
            </option>
        @endforeach
    </select>
    @error('espacio_id') <div style="color:red">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label>Solicitante</label>
    <input type="text" name="solicitante"  class="form-control" value="{{ old('solicitante', $reserva->solicitante ?? '') }}">
    @error('solicitante') <div style="color:red">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label>Fecha</label>
    <input type="date" name="fecha" class="form-control"  value="{{ old('fecha', $reserva->fecha ?? '') }}">
    @error('fecha') <div style="color:red">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label>Hora Inicio</label>
    <input type="time" name="hora_inicio" class="form-control" value="{{ old('hora_inicio', $reserva->hora_inicio ?? '') }}">
    @error('hora_inicio') <div style="color:red">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label>Hora Fin</label>
    <input type="time" name="hora_fin" class="form-control" value="{{ old('hora_fin', $reserva->hora_fin ?? '') }}">
    @error('hora_fin') <div style="color:red">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label>Motivo</label>
    <textarea name="motivo" class="form-control">{{ old('motivo', $reserva->motivo ?? '') }}</textarea>
</div>