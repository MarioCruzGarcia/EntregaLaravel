@extends('layouts.app')

@section('content')

<h1>Editar Profesor</h1>
<form action="{{ route('profesores.update', $profesor->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $profesor->nombre }}">
    </div>
    <div class="form-group">
        <label for="apellidos">Apellidos</label>
        <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ $profesor->apellidos }}">
    </div>
    <div class="form-group">
        <label for="dni">DNI</label>
        <input type="text" class="form-control" id="dni" name="dni" value="{{ $profesor->dni }}">
    </div>
    <div class="form-group">
        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ $profesor->fecha_nacimiento }}">
    </div>
    <div class="form-group">
        <label for="telefono">Teléfono</label>
        <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $profesor->telefono }}">
    </div>

    <!-- Repite este bloque para cada campo del profesor que desees editar -->

    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
</form>
@endsection
