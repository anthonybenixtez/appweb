<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;
    protected $table = 'notas';
    protected $fillable = ['nota1', 'nota2','nota3','nota4','promedio','parcial','alumno_id','cursos_id','profesor_id'];


}
