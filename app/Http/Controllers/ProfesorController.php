<?php

namespace App\Http\Controllers;

use App\Models\Profesores;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function index()
    {
        $profesores = Profesores::all();
        return view('profesores.index', compact('profesores'));
    }

    public function create()
    {
        return view('profesores.create');
    }

    public function store(Request $request)
    {
        // Validación de los datos antes de insertar
        $validacion = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'dni' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'telefono' => 'required|string|max:255',
        ]);

        // Crear un nuevo profesor con los datos validados
        Profesores::create([
            'nombre' => $validacion['nombre'],
            'apellidos' => $validacion['apellidos'],
            'dni' => $validacion['dni'],
            'fecha_nacimiento' => $validacion['fecha_nacimiento'],
            'telefono' => $validacion['telefono'],
        ]);

        // Redirigir a la ruta de index de profesores después de crear el profesor
        return redirect()->route('profesores.index')->with('success', '¡Profesor creado exitosamente!');
    }

    public function edit($id)
    {
        $profesor = Profesores::find($id);
        return view('profesores.edit', compact('profesor'));
    }

    public function update(Request $request, $id)
    {
        // Buscar el profesor por su id
        $profesor = Profesores::find($id);

        // Validar los datos recibidos
        $validacion = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'dni' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'telefono' => 'required|string|max:255',
        ]);

        // Actualizar los datos del profesor
        $profesor->update([
            'nombre' => $validacion['nombre'],
            'apellidos' => $validacion['apellidos'],
            'dni' => $validacion['dni'],
            'fecha_nacimiento' => $validacion['fecha_nacimiento'],
            'telefono' => $validacion['telefono'],
        ]);

        return redirect()->route('profesores.index')->with('success', '¡Profesor actualizado exitosamente!');
    }

    public function destroy($id)
    {
        // Eliminar el profesor por su id
        Profesores::destroy($id);

        return redirect()->route('profesores.index')->with('success', '¡Profesor eliminado exitosamente!');
    }
}
