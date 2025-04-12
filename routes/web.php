<?php

use App\Http\Controllers\PropietarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// rutas de propietarios
Route::get('propietarios',[PropietarioController::class,'index'])->name('propietarios.index');
Route::post('propietarios',[PropietarioController::class,'store'])->name('propietarios.store');
Route::get('propietarios/create',[PropietarioController::class,'create'])->name('propietarios.create');







