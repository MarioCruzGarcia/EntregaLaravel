@extends('layouts.app')

@section('content')
    <style>
        /* Estilos para la tabla */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        /* Estilos para los enlaces de acciones */
        .action-links a {
            text-decoration: none;
            color: #007bff;
            margin-right: 10px;
        }
        
        .action-links a:hover {
            text-decoration: underline;
        }
        
        /* Estilos para los botones de eliminar */
        .action-links form button {
            border: none;
            background: none;
            color: #dc3545;
            cursor: pointer;
        }
        
        .action-links form button:hover {
            text-decoration: underline;
        }
    </style>

    <h1>Listado de Ciclos</h1>
    <a href="{{ route('ciclos.create') }}">Nuevo Ciclo</a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ciclos as $ciclo)
                <tr>
                    <td>{{ $ciclo->nombre }}</td>
                    <td>{{ $ciclo->descripcion }}</td>
                    <td class="action-links">
                        <a href="{{ route('ciclos.edit', $ciclo->id) }}">Editar</a>
                        <form action="{{ route('ciclos.destroy', $ciclo->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
