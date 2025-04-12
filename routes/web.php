<?php

use App\Http\Controllers\PropietarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// rutas de propietarios
Route::get('propietarios',[PropietarioController::class,'index']);