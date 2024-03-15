@extends('layouts.app')

@section('content')

<h1>Editar Ciclo</h1>
<form action="{{ route('ciclos.update', $ciclo->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $ciclo->nombre }}">
    </div>
    <div class="form-group">
        <label for="descripcion">Descripción</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $ciclo->descripcion }}">
    </div>

    <!-- Repite este bloque para cada campo del ciclo que desees editar -->

    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
</form>
@endsection
