@extends('layouts.app')

@section('content')

<h1>Editar Aula</h1>
<form action="{{ route('aulas.update', $aula->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $aula->nombre }}">
    </div>
    <div class="mb-3">
        <label for="planta" class="form-label">Planta</label>
        <input type="text" class="form-control" id="planta" name="planta" value="{{ $aula->planta }}">
    </div>
    <div class="mb-3">
        <label for="capacidad" class="form-label">Capacidad</label>
        <input type="number" class="form-control" id="capacidad" name="capacidad" value="{{ $aula->capacidad }}">
    </div>
    <div class="mb-3">
        <label for="caracteristicas" class="form-label">Características</label>
        <input type="text" class="form-control" id="caracteristicas" name="caracteristicas" value="{{ $aula->caracteristicas }}">
    </div>

    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
</form>
@endsection
