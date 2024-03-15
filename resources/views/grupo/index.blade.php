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

    <h1>Listado de Grupos</h1>
    <a href="{{ route('grupos.create') }}">Nuevo Grupo</a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Aula ID</th>
                <th>Curso ID</th>
                <th>Ciclo ID</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($grupos as $grupo)
                <tr>
                    <td>{{ $grupo->nombre }}</td>
                    <td>{{ $grupo->aulas_id }}</td>
                    <td>{{ $grupo->cursos_id }}</td>
                    <td>{{ $grupo->ciclos_id }}</td>
                    <td class="action-links">
                        <a href="{{ route('grupos.edit', $grupo->id) }}">Editar</a>
                        <form action="{{ route('grupos.destroy', $grupo->id) }}" method="POST">
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
