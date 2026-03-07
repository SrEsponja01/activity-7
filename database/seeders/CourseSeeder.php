<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course; // <-- Asegúrate de tener esta ruta correcta

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sintaxis moderna para generar 100 registros
        Course::factory()->count(100)->create();
    }
}