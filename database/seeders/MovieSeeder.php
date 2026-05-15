<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie; 
use Faker\Factory as Faker; // Usamos este alias para que sea más fácil

class MovieSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Limpia la tabla
        Movie::truncate();
        
        // 2. Creamos la instancia de Faker correctamente
        $faker = Faker::create();
        
        // 3. Creamos los 10 registros
        for ($i = 0; $i < 10; $i++) {
            Movie::create([
                'title'    => $faker->sentence(3),
                'synopsis' => $faker->paragraph,
                'year'     => $faker->year,
                'cover'    => $faker->imageUrl(640, 480, 'movies'),
            ]);
        }
    }
}