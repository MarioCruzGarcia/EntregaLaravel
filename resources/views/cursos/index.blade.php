@extends('layouts.app')

@section('content')
    <style>
        /* Estilos para las cards */
        .card {
            width: 300px;
            border: 1px solid #dddddd;
            border-radius: 5px;
            margin-left: 80px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow: hidden;
        }
        
        .card-header {
            background-color: #f2f2f2;
            padding: 10px;
            font-weight: bold;
            border-bottom: 1px solid #dddddd;
        }
        
        .card-body {
            padding: 10px;
        }
    </style>

    <h1>Listado de cursos</h1>
    <div class="row">
        @foreach($cursos as $curso)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">{{ $curso->curso }}</div>
                    <div class="card-body">
                        <p>Descripción del curso...</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
