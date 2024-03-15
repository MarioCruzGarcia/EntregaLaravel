<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use App\Models\Entregas;
use App\Models\AlumnosHasEntregas;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        /*
        Hemos tenido muchos problemas al poder juntar las tablas, cuando intenta coger las 3
        La de 'has' la coge con dobles '_' por lo que hay que cambiar todos los nombres de los modelos 
        que es de donde coge el nombre de la tabla
        
        */ 
        $alumnos = Alumnos::all();
        $entregas = Entregas::all();
        $alumnos_has_entregas = AlumnosHasEntregas::all();
        return view('alumnos.index', compact('alumnos', 'entregas', 'alumnos_has_entregas'));
    }

    // Implementa los métodos create, store, show, edit, update y destroy según sea necesario
    public function create()
    {
        $alumnos = Alumnos::all();
        return view('alumnos.create', compact('alumnos'));
    }


    public function store(Request $request)
    {
        // Validación de los datos antes de insertar
        $validacion = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'dni' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'numero_matricula' => 'required|string|max:255',
            'email' => 'required|email|unique:alumnos,email|max:255',
        ], [
            'nombre.required' => 'El nombre del alumno es obligatorio',
            'nombre.string' => 'El nombre del alumno debe ser una cadena de caracteres',
            'nombre.max' => 'El nombre del alumno no puede exceder los :max caracteres',

            'apellidos.required' => 'Los apellidos del alumno son obligatorios',
            'apellidos.string' => 'Los apellidos del alumno deben ser una cadena de caracteres',
            'apellidos.max' => 'Los apellidos del alumno no pueden exceder los :max caracteres',

            'dni.required' => 'El DNI del alumno es obligatorio',
            'dni.string' => 'El DNI del alumno debe ser una cadena de caracteres',
            'dni.max' => 'El DNI del alumno no puede exceder los :max caracteres',

            'fecha_nacimiento.required' => 'La fecha de nacimiento del alumno es obligatoria',
            'fecha_nacimiento.date' => 'La fecha de nacimiento del alumno debe ser una fecha válida',

            'numero_matricula.required' => 'El número de matrícula del alumno es obligatorio',
            'numero_matricula.string' => 'El número de matrícula del alumno debe ser una cadena de caracteres',
            'numero_matricula.max' => 'El número de matrícula del alumno no puede exceder los :max caracteres',

            'email.required' => 'El correo electrónico del alumno es obligatorio',
            'email.email' => 'El correo electrónico del alumno debe ser una dirección de correo válida',
            'email.unique' => 'El correo electrónico del alumno ya ha sido registrado',
            'email.max' => 'El correo electrónico del alumno no puede exceder los :max caracteres',
        ]);



        // Crear un nuevo alumno con los datos validados
        Alumnos::create([
            'nombre' => $validacion['nombre'],
            'apellidos' => $validacion['apellidos'],
            'dni' => $validacion['dni'],
            'fecha_nacimiento' => $validacion['fecha_nacimiento'],
            'numero_matricula' => $validacion['numero_matricula'],
            'email' => $validacion['email'],
        ]);

        // Redirigir a la ruta de index de alumnos después de crear el alumno
        return redirect()->route('alumnos.index')->with('success', '¡Alumno creado exitosamente!');
    }

    public function edit($id)
    {
        $alumnos = Alumnos::find($id);
        return view('alumnos.edit', compact('alumnos'));
    }
    public function update(Request $request, $id)
    {
        /**
         * Buscar por id el coche que se va a actualizar
         * 
         * Usar los datos recibidos en $request para actualizar esos datos
         */
        $alumnos = Alumnos::find($id);
        $alumnos->update([
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'dni' => $request->dni,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'numero_matricula' => $request->numero_matricula,
            'email' => $request->email,
        ]);
        return redirect()->route('alumnos.index')->with('success', 'Alumno actualizado correctamente');
    }

    public function destroy($id)
    {
        // Opción A. Utilizar cuando la clave primaria es el dato que se va a eliminar
        Alumnos::destroy($id);

        // Opción B. Utilizar cuando el dato que se va a eliminar no es una clave primaria
        // Alumno::where('id', '=', $id)->delete();

        // Opción C. Utilizar cuando se necesita recuperar el objeto completo antes de eliminarlo
        // $alumno = Alumno::find($id);
        // $alumno->delete();

        return redirect()->route('alumnos.index');
    }

}

