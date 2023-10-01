<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlumnoController extends Controller
{
    public function index()
    {
        // Realizar una consulta SQL para seleccionar los datos de la tabla 'alumnos'
        $alumnos = DB::select('SELECT * FROM alumnos');
        return view('alumnos.index', ['alumnos' => $alumnos]);
    }

    public function store(Request $request)
    {
        // Validar y obtener los datos del formulario
        $data = $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'fechanacimiento' => 'required|string',
            'direccion' => 'required|string',
            'genero' => 'required|string',
            'telefono' => 'required|string',
            'correo' => 'required|email',
            'clave' => 'required|string',
        ]);

        // Insertar los datos en la tabla de profesores utilizando el método insert
        DB::table('alumnos')->insert($data); // Corrige el nombre de la tabla

        return redirect('/alumnos');
    }
}

