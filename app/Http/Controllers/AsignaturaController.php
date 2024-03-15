<?php

namespace App\Http\Controllers;

use App\Models\Asignaturas;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    public function index()
    {
        $asignaturas = Asignaturas::all();
        return view('asignaturas.index', compact('asignaturas'));
    }

    public function create()
    {
        return view('asignaturas.create');
    }

    public function store(Request $request)
    {
        $validacion = $request->validate([
            'nombre' => 'required|string|max:255',
            'contenidos' => 'required|string',
        ], [
            'nombre.required' => 'El nombre de la asignatura es obligatorio',
            'nombre.string' => 'El nombre de la asignatura debe ser una cadena de caracteres',
            'nombre.max' => 'El nombre de la asignatura no puede exceder los :max caracteres',

            'contenidos.required' => 'Los contenidos de la asignatura son obligatorios',
            'contenidos.string' => 'Los contenidos de la asignatura deben ser una cadena de caracteres',
        ]);

        Asignaturas::create([
            'nombre' => $validacion['nombre'],
            'contenidos' => $validacion['contenidos'],
        ]);

        return redirect()->route('asignaturas.index')->with('success', '¡Asignatura creada exitosamente!');
    }

    public function edit($id)
    {
        $asignatura = Asignaturas::find($id);
        return view('asignaturas.edit', compact('asignatura'));
    }

    public function update(Request $request, $id)
    {
        $asignatura = Asignaturas::find($id);
        $asignatura->update([
            'nombre' => $request->nombre,
            'contenidos' => $request->contenidos,
        ]);
        return redirect()->route('asignaturas.index')->with('success', 'Asignatura actualizada correctamente');
    }

    public function destroy($id)
    {
        Asignaturas::destroy($id);
        return redirect()->route('asignaturas.index');
    }
}