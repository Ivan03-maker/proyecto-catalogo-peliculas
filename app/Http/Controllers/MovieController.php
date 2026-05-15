<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    // Asegúrate de que se llame 'index' y que esté DENTRO de las llaves de la clase
    public function index(Request $request)
    {
        // Llamamos a todos los registros
        $movies = Movie::all();

        // Si la petición espera JSON (como Angular o Postman), enviamos JSON
    if ($request->wantsJson() || $request->is('api/*')) {
        return response()->json($movies);
    }

        // Retornamos la vista
        return view('movies.index', compact('movies'));
    }

    public function show($id)
{
    $movie = Movie::find($id);

    if (!$movie) {
        return response()->json(['message' => 'Película no encontrada'], 404);
    }

    return response()->json($movie);
}

// 2. Aprovecha para agregar de una vez la de insertar (store) si no la tienes
public function store(Request $request)
{
    $validatedData = $request->validate([
        'title'    => 'required|string|max:255',
        'synopsis' => 'required|string',
        'year'     => 'required|integer',
        'cover'    => 'nullable|string' // Lo ponemos como opcional por si no tienes URL de imagen
    ]);

    $movie = Movie::create($validatedData);

    return response()->json([
        'message' => 'Película creada con éxito',
        'movie' => $movie
    ], 201);
}

// Función para actualizar (PUT)
public function update(Request $request, $id)
{
    $movie = Movie::find($id);

    if (!$movie) {
        return response()->json(['message' => 'Película no encontrada'], 404);
    }

    // Validamos los datos que llegan
    $validatedData = $request->validate([
        'title'    => 'string|max:255',
        'synopsis' => 'string',
        'year'     => 'integer',
        'cover'    => 'nullable|string'
    ]);

    $movie->update($validatedData);

    return response()->json([
        'message' => 'Película actualizada con éxito',
        'movie'   => $movie
    ]);
}

public function destroy($id)
{
    $movie = Movie::find($id);
    if ($movie) {
        $movie->delete();
        return response()->json(['message' => 'Eliminado'], 200);
    }
    return response()->json(['message' => 'No encontrado'], 404);
}
}