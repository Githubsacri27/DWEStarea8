<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LibroController extends Controller
{
    /** 
    * Esta función se encarga de realizar la consulta SELECT * FROM libro y retornar la vista de los libros
    * @return view Vista de los libros tras la consulta SELECT * FROM libro
    */
    public function index()
    {
        $libros = DB::select('SELECT * FROM libro');
        return view('vista_libros',['libros'=>$libros]);
    }

    /** 
    * Esta función se encarga de retornar la vista de buscar_libros
    *
    * @return view Vista de buscar_libros
    */
    public function buscar_libros()
    {
        return view('buscar_libros');
    }

    /** 
    * Esta función se encarga de realizar la consulta SELECT * FROM libro WHERE titulo LIKE '%$valor%'
    *
    * @param object $request Caracteres introducidos en la búsqueda
    * @return json Json con la respuesta a la consulta SELECT * FROM libro WHERE titulo LIKE '%$valor%'
    */
    public function consultar_libros(Request $request)
    {
        $valor = $request->q;
        $libros = DB::select("SELECT * FROM libro WHERE titulo LIKE '%$valor%'");
        return response()->json($libros, 200);
    }
}
