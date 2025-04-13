<?php

use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\MacostaController;
use App\Http\Controllers\VisitaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// rutas de propietarios
Route::get('/propietarios',[PropietarioController::class,'index'])->name('propietarios.index');
Route::post('/propietarios',[PropietarioController::class,'store'])->name('propietarios.store');
Route::get('/propietarios/create',[PropietarioController::class,'create'])->name('propietarios.create');
Route::delete('/propietarios/{propietario}',[PropietarioController::class,'destroy'])->name('propietarios.destroy');
Route::put('/propietarios/{propietario}',[PropietarioController::class,'update'])->name('propietarios.update');
Route::get('/propietarios/{propietario}/edit',[PropietarioController::class,'edit'])->name('propietarios.edit');

// ruta de mascotas
Route::get('/mascotas',[MacostaController ::class,'index'])->name('mascotas.index');
Route::post('/mascotas',[MacostaController::class,'store'])->name('mascotas.store');
Route::get('/mascotas/create',[MacostaController::class,'create'])->name('mascotas.create');
Route::put('/mascotas/{mascota}',[MacostaController::class,'update'])->name('mascotas.update');
Route::get('/mascotas/{mascota}/edit',[MacostaController::class,'edit'])->name('mascotas.edit');
Route::delete('/mascotas/{mascota}',[MacostaController::class,'destroy'])->name('mascotas.destroy');


// rutas de visitas
Route::get('/visitas',[VisitaController ::class,'index'])->name('visitas.index');
Route::post('/visitas',[VisitaController::class,'store'])->name('visitas.store');
Route::get('/visitas/create',[VisitaController::class,'create'])->name('visitas.create');
Route::delete('/visitas/{visita}',[VisitaController::class,'destroy'])->name('visitas.destroy');



