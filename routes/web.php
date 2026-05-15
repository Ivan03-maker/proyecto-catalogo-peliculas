<?php

use Illuminate\Support\Facades\Route;
// 1. IMPORTANTE: Importa el controlador aquí
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome');
});

// 2. Crea la ruta para el catálogo
Route::get('/peliculas', [MovieController::class, 'index']);