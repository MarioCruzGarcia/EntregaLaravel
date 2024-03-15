<?php

namespace App\Http\Controllers;

use App\Models\Grupos;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    public function index()
    {
        $grupos = Grupos::all();
        return view('grupo.index', compact('grupos'));
    }

    public function create()
    {
        return view('grupo.create');
    }

    public function store(Request $request)
    {
        $validacion = $request->validate([
            'nombre' => 'required|string|max:255',
            'aulas_id' => 'required|integer',
            'cursos_id' => 'required|integer',
            'ciclos_id' => 'required|integer',
        ], [
            'nombre.required' => 'El nombre del grupo es obligatorio',
            'nombre.string' => 'El nombre del grupo debe ser una cadena de caracteres',
            'nombre.max' => 'El nombre del grupo no puede exceder los :max caracteres',

            'aulas_id.required' => 'El ID del aula es obligatorio',
            'aulas_id.integer' => 'El ID del aula debe ser un número entero',

            'cursos_id.required' => 'El ID del curso es obligatorio',
            'cursos_id.integer' => 'El ID del curso debe ser un número entero',

            'ciclos_id.required' => 'El ID del ciclo es obligatorio',
            'ciclos_id.integer' => 'El ID del ciclo debe ser un número entero',
        ]);

        Grupos::create([
            'nombre' => $validacion['nombre'],
            'aulas_id' => $validacion['aulas_id'],
            'cursos_id' => $validacion['cursos_id'],
            'ciclos_id' => $validacion['ciclos_id'],
        ]);

        return redirect()->route('grupos.index')->with('success', '¡Grupo creado exitosamente!');
    }

    public function edit($id)
    {
        $grupo = Grupos::find($id);
        return view('grupo.edit', compact('grupo'));
    }

    public function update(Request $request, $id)
    {
        $grupo = Grupos::find($id);
        $grupo->update([
            'nombre' => $request->nombre,
            'aulas_id' => $request->aulas_id,
            'cursos_id' => $request->cursos_id,
            'ciclos_id' => $request->ciclos_id,
        ]);
        return redirect()->route('grupos.index')->with('success', 'Grupo actualizado correctamente');
    }

    public function destroy($id)
    {
        Grupos::destroy($id);
        return redirect()->route('grupos.index');
    }
}