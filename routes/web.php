<?php

use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\MacostaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// rutas de propietarios
Route::get('propietarios',[PropietarioController::class,'index'])->name('propietarios.index');
Route::post('propietarios',[PropietarioController::class,'store'])->name('propietarios.store');
Route::get('propietarios/create',[PropietarioController::class,'create'])->name('propietarios.create');
Route::delete('propietarios/{propietario}',[PropietarioController::class,'destroy'])->name('propietarios.destroy');
Route::put('propietarios/{propietario}',[PropietarioController::class,'update'])->name('propietarios.update');
Route::get('propietarios/{propietario}/edit',[PropietarioController::class,'edit'])->name('propietarios.edit');

// ruta de mascotas
Route::get('mascotas',[MacostaController ::class,'index'])->name('mascotas.index');






