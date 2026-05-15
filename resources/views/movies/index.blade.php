<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Películas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl margin-auto bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Mis Películas</h1>
            <a href="/" class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-black transition">
                ← Regresar al Inicio
            </a>
        </div>

        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-bottom-2 border-gray-200">
                    <th class="py-2">Título</th>
                    <th class="py-2">Año</th>
                    <th class="py-2">Sinopsis</th>
                </tr>
            </thead>
            <tbody>
                @foreach($movies as $movie)
                <tr class="border-bottom border-gray-100">
                    <td class="py-2 font-medium">{{ $movie->title }}</td>
                    <td class="py-2">{{ $movie->year }}</td>
                    <td class="py-2 text-sm text-gray-600">{{ $movie->synopsis }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>