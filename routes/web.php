<?php

use Illuminate\Support\Facades\Route;
use App\Models\Course; // Importamos tu modelo

// Ruta principal (La pantalla de bienvenida de Laravel)
Route::get('/', function () {
    return view('welcome');
});

// ¡Nuestra ruta secreta para ver los datos!
Route::get('/mis-cursos', function () {
    // Esto buscará los 100 cursos y traerá también la información del grupo al que pertenecen
    return Course::with('group')->get(); 
});