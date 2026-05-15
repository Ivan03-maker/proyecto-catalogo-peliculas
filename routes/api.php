<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// Rutas para el catálogo de películas (Consumidas por Angular y Postman)
Route::prefix('movies')->group(function () {
    Route::get('/', [MovieController::class, 'index']);          // Listado
    Route::get('/{id}', [MovieController::class, 'show']);      // Obtener una (para editar)
    Route::post('/', [MovieController::class, 'store']);        // Agregar
    Route::put('/{id}', [MovieController::class, 'update']);    // Editar
    Route::delete('/{id}', [MovieController::class, 'destroy']); // Eliminar
});