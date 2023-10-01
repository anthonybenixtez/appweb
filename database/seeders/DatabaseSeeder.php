<?php

namespace Database\Seeders;
use App\Models\Alumno;
use App\Models\Profesor;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(notas::class);
        // Agrega llamadas a otros seeders si los tienes
        Alumno::factory(18)->create();
        Profesor::factory(18)->create();
    }
}
