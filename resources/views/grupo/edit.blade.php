@extends('layouts.app')

@section('content')

<h1>Editar Grupo</h1>
<form action="{{ route('grupos.update', $grupo->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $grupo->nombre }}">
    </div>
    <div class="form-group">
        <label for="aulas_id">ID del Aula</label>
        <input type="text" class="form-control" id="aulas_id" name="aulas_id" value="{{ $grupo->aulas_id }}">
    </div>
    <div class="form-group">
        <label for="cursos_id">ID del Curso</label>
        <input type="text" class="form-control" id="cursos_id" name="cursos_id" value="{{ $grupo->cursos_id }}">
    </div>
    <div class="form-group">
        <label for="ciclos_id">ID del Ciclo</label>
        <input type="text" class="form-control" id="ciclos_id" name="ciclos_id" value="{{ $grupo->ciclos_id }}">
    </div>

    <!-- Repite este bloque para cada campo del grupo que desees editar -->

    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
</form>
@endsection
