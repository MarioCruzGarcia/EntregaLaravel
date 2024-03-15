@extends('layouts.app')

@section('content')

<h1>Editar Alumno</h1>
<form action="{{ route('alumnos.update', $alumnos->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $alumnos->nombre }}">
    </div>
    <div class="form-group">
        <label for="apellidos">Apellidos</label>
        <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ $alumnos->apellidos }}">
    </div>
    <div class="form-group">
        <label for="dni">DNI</label>
        <input type="text" class="form-control" id="dni" name="dni" value="{{ $alumnos->dni }}">
    </div>
    <div class="form-group">
        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ $alumnos->fecha_nacimiento }}">
    </div>
    <div class="form-group">
        <label for="numero_matricula">Número de Matrícula</label>
        <input type="text" class="form-control" id="numero_matricula" name="numero_matricula" value="{{ $alumnos->numero_matricula }}">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $alumnos->email }}">
    </div>

    <!-- Repite este bloque para cada campo del alumno que desees editar -->

    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
</form>
@endsection
