<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;


Route::get('/', [LibroController::class, 'mostrarFormulario']);
Route::post('/buscar-libros', [LibroController::class, 'buscarLibros']);