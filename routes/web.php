<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;


Route::get('libros/buscar', [LibroController::class, 'buscar_libros']);
Route::post('libros/consultar', [LibroController::class, 'consultar_libros']);
?>