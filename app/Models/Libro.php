<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $table= 'libro';// con el modelo simplemente se hace referencia a la tabla libro de la base de datos
}
