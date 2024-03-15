<?php

use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\GrupoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\CiclosController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// routes/web.php


Route::resource('alumnos', AlumnoController::class);
Route::get('/alumnos/create', [AlumnoController::class, 'create'])->name('alumnos.create');
Route::get('/alumnos/{alumno}/edit', [AlumnoController::class, 'edit'])->name('alumnos.edit');
Route::put('/alumnos/{alumno}', [AlumnoController::class, 'update'])->name('alumnos.update');
Route::delete('/alumnos/{alumno}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');
Route::post('/alumnos', [AlumnoController::class, 'store'])->name('alumnos.store');

Route::resource('aulas', AulaController::class);
Route::get('/aulas/create', [AulaController::class, 'create'])->name('aulas.create');
Route::get('/aulas/{aulas}/edit', [AulaController::class, 'edit'])->name('aulas.edit');
Route::put('/aulas/{aulas}', [AulaController::class, 'update'])->name('aulas.update');
Route::delete('/aulas/{aulas}', [AulaController::class, 'destroy'])->name('aulas.destroy');
Route::post('/aulas', [AulaController::class, 'store'])->name('aulas.store');

Route::resource('cursos', CursosController::class);

Route::get('/profesores', [ProfesorController::class, 'index'])->name('profesores.index');
Route::get('/profesores/create', [ProfesorController::class, 'create'])->name('profesores.create');
Route::post('/profesores', [ProfesorController::class, 'store'])->name('profesores.store');
Route::get('/profesores/{profesor}', [ProfesorController::class, 'show'])->name('profesores.show');
Route::get('/profesores/{profesor}/edit', [ProfesorController::class, 'edit'])->name('profesores.edit');
Route::put('/profesores/{profesor}', [ProfesorController::class, 'update'])->name('profesores.update');
Route::delete('/profesores/{profesor}', [ProfesorController::class, 'destroy'])->name('profesores.destroy');

Route::resource('ciclos', CiclosController::class);
Route::get('/ciclos/create', [CiclosController::class, 'create'])->name('ciclos.create');
Route::get('/ciclos/{ciclo}/edit', [CiclosController::class, 'edit'])->name('ciclos.edit');
Route::put('/ciclos/{ciclo}', [CiclosController::class, 'update'])->name('ciclos.update');
Route::delete('/ciclos/{ciclo}', [CiclosController::class, 'destroy'])->name('ciclos.destroy');
Route::post('/ciclos', [CiclosController::class, 'store'])->name('ciclos.store');

Route::resource('asignaturas', AsignaturaController::class);
Route::get('/asignaturas/create', [AsignaturaController::class, 'create'])->name('asignaturas.create');
Route::get('/asignaturas/{asignatura}/edit', [AsignaturaController::class, 'edit'])->name('asignaturas.edit');
Route::put('/asignaturas/{asignatura}', [AsignaturaController::class, 'update'])->name('asignaturas.update');
Route::delete('/asignaturas/{asignatura}', [AsignaturaController::class, 'destroy'])->name('asignaturas.destroy');
Route::post('/asignaturas', [AsignaturaController::class, 'store'])->name('asignaturas.store');

Route::resource('grupos', GrupoController::class);
Route::get('/grupos/create', [GrupoController::class, 'create'])->name('grupos.create');
Route::get('/grupos/{grupo}/edit', [GrupoController::class, 'edit'])->name('grupos.edit');
Route::put('/grupos/{grupo}', [GrupoController::class, 'update'])->name('grupos.update');
Route::delete('/grupos/{grupo}', [GrupoController::class, 'destroy'])->name('grupos.destroy');
Route::post('/grupos', [GrupoController::class, 'store'])->name('grupos.store');

