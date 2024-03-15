@extends('layouts.app')

@section('content')

<h1>Editar Asignatura</h1>
<form action="{{ route('asignaturas.update', $asignatura->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $asignatura->nombre }}">
    </div>
    <div class="form-group">
        <label for="contenidos">Contenidos</label>
        <textarea class="form-control" id="contenidos" name="contenidos">{{ $asignatura->contenidos }}</textarea>
    </div>

    <!-- Repite este bloque para cada campo de la asignatura que desees editar -->

    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
</form>
@endsection