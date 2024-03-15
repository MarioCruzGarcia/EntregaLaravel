<?php

namespace App\Http\Controllers;

use App\Models\Aulas;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    public function index()
    {
        $aulas = Aulas::all();
        return view('aulas.index', compact('aulas'));
    }

    public function create()
    {
        return view('aulas.create');
    }

    public function store(Request $request)
    {
        // Validación de los datos antes de insertar
        $validacion = $request->validate([
            'nombre' => 'required|string|max:255',
            'planta' => 'required|integer',
            'capacidad' => 'required|integer',
            'caracteristicas' => 'nullable|string|max:255',
        ], [
            'nombre.required' => 'El nombre del aula es obligatorio',
            'nombre.string' => 'El nombre del aula debe ser una cadena de caracteres',
            'nombre.max' => 'El nombre del aula no puede exceder los :max caracteres',

            'planta.required' => 'La planta del aula es obligatoria',
            'planta.integer' => 'La planta del aula debe ser un número entero',

            'capacidad.required' => 'La capacidad del aula es obligatoria',
            'capacidad.integer' => 'La capacidad del aula debe ser un número entero',

            'caracteristicas.string' => 'Las características del aula deben ser una cadena de caracteres',
            'caracteristicas.max' => 'Las características del aula no pueden exceder los :max caracteres',
        ]);

        // Crear una nueva aula con los datos validados
        Aulas::create([
            'nombre' => $validacion['nombre'],
            'planta' => $validacion['planta'],
            'capacidad' => $validacion['capacidad'],
            'caracteristicas' => $validacion['caracteristicas'],
        ]);

        // Redirigir a la ruta de index de aulas después de crear el aula
        return redirect()->route('aulas.index')->with('success', '¡Aula creada exitosamente!');
    }

    public function edit($id)
    {
        $aula = Aulas::find($id);
        return view('aulas.edit', compact('aula'));
    }

    public function update(Request $request, $id)
    {
        // Buscar el aula por su id
        $aula = Aulas::find($id);

        // Validar los datos recibidos
        $validacion = $request->validate([
            'nombre' => 'required|string|max:255',
            'planta' => 'required|integer',
            'capacidad' => 'required|integer',
            'caracteristicas' => 'nullable|string|max:255',
        ]);

        // Actualizar los datos del aula
        $aula->update([
            'nombre' => $validacion['nombre'],
            'planta' => $validacion['planta'],
            'capacidad' => $validacion['capacidad'],
            'caracteristicas' => $validacion['caracteristicas'],
        ]);

        return redirect()->route('aulas.index')->with('success', '¡Aula actualizada exitosamente!');
    }

    public function destroy($id)
    {
        // Eliminar el aula por su id
        Aulas::destroy($id);

        return redirect()->route('aulas.index')->with('success', '¡Aula eliminada exitosamente!');
    }
}
