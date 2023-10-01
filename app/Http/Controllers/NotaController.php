<?php

namespace App\Http\Controllers;
use App\Models\Nota;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    public function index()
    {
        // Obtener la lista de profesores
        $notas = DB::select('SELECT * FROM notas');

        // Retornar la vista con los datos
        return view('notas.index', ['notas' => $notas]); // Corrige el nombre de la vista
    }

    public function store(Request $request)
    {
        // Validar y obtener los datos del formulario
        $data = $request->validate([
            'nota1' => 'required|numeric',
            'nota2' => 'required|numeric',
            'nota3' => 'required|numeric',
            'nota4' => 'required|numeric',
            'promedio' => 'required|numeric',
            'parcial' => 'required|numeric',
            'alumno_id' => 'required|numeric',
            'cursos_id' => 'required|numeric',
            'profesor_id' => 'required|numeric',

        ]);

        // Insertar los datos en la tabla de profesores utilizando el método insert
        DB::table('notas')->insert($data); // Corrige el nombre de la tabla

        return redirect('/notas');
    }
}
