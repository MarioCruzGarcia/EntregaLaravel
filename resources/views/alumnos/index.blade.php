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

    <h1>Listado de Alumnos</h1>
    <a href="{{ route('alumnos.create') }}">Crear Alumno</a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>DNI</th>
                <th>Fecha de Nacimiento</th>
                <th>Número de Matrícula</th>
                <th>Email</th>
                <th>Entrega</th>
                <th>Calificacion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->apellidos }}</td>
                    <td>{{ $alumno->dni }}</td>
                    <td>{{ $alumno->fecha_nacimiento }}</td>
                    <td>{{ $alumno->numero_matricula }}</td>
                    <td>{{ $alumno->email }}</td>
                    <td>
                        {{-- Recorro 'has' primero igualo el alumno_id con el id del alumno
                            Recorro entregas y lo mismo igualo los terminos
                            En caso de cumplirse pone el nombre de la entrega en pantalla, sino en blanco--}}
                        @foreach($alumnos_has_entregas as $alumnos_has_entrega)
                            @if($alumnos_has_entrega->alumnos_id == $alumno->id)
                                @foreach($entregas as $entrega)
                                    @if($alumnos_has_entrega->entregas_id == $entrega->id)
                                        {{ $entrega->nombre }}
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </td>
                    <td>
                        {{-- Recorro 'has' primero igualo el alumno_id con el id del alumno
                            Recorro entregas y lo mismo igualo los terminos
                            En caso de cumplirse pone la calificacion haciendo referencia a ella
                            pondra en pantalla, sino en blanco--}}
                        @foreach($alumnos_has_entregas as $alumnos_has_entrega)
                            @if($alumnos_has_entrega->alumnos_id == $alumno->id)
                                @foreach($entregas as $entrega)
                                    @if($alumnos_has_entrega->entregas_id == $entrega->id)
                                        {{ $alumnos_has_entrega->calificacion }}
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </td>
                    <td class="action-links">
                        <a href="{{ route('alumnos.edit', $alumno->id) }}">Editar</a>
                        <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST">
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
