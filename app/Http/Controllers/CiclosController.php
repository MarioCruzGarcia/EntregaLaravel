<?php

namespace App\Http\Controllers;

use App\Models\Ciclos;
use Illuminate\Http\Request;

class CiclosController extends Controller
{
    public function index()
    {
        $ciclos = Ciclos::all();
        return view('ciclos.index', compact('ciclos'));
    }

    public function create()
    {
        return view('ciclos.create');
    }

    public function store(Request $request)
    {
        $validacion = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
        ], [
            'nombre.required' => 'El nombre del ciclo es obligatorio',
            'nombre.string' => 'El nombre del ciclo debe ser una cadena de caracteres',
            'nombre.max' => 'El nombre del ciclo no puede exceder los :max caracteres',

            'descripcion.required' => 'La descripción del ciclo es obligatoria',
            'descripcion.string' => 'La descripción del ciclo debe ser una cadena de caracteres',
            'descripcion.max' => 'La descripción del ciclo no puede exceder los :max caracteres',
        ]);

        Ciclos::create([
            'nombre' => $validacion['nombre'],
            'descripcion' => $validacion['descripcion'],
        ]);

        return redirect()->route('ciclos.index')->with('success', '¡Ciclo creado exitosamente!');
    }

    public function edit($id)
    {
        $ciclo = Ciclos::find($id);
        return view('ciclos.edit', compact('ciclo'));
    }

    public function update(Request $request, $id)
    {
        $ciclo = Ciclos::find($id);
        $ciclo->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
        ]);
        return redirect()->route('ciclos.index')->with('success', 'Ciclo actualizado correctamente');
    }

    public function destroy($id)
    {
        Ciclos::destroy($id);
        return redirect()->route('ciclos.index');
    }
}
