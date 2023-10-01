<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    public function index()
    {
        // Obtener la lista de profesores
        $profesores = DB::select('SELECT * FROM profesor');

        // Retornar la vista con los datos
        return view('profesores.index', ['profesores' => $profesores]); // Corrige el nombre de la vista
    }

    public function store(Request $request)
    {
        // Validar y obtener los datos del formulario
        $data = $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'dui' => 'required|string',
            'telefono' => 'required|string',
            'correo' => 'required|email',
            'clave' => 'required|string',
        ]);

        // Insertar los datos en la tabla de profesores utilizando el método insert
        DB::table('profesor')->insert($data); // Corrige el nombre de la tabla

        return redirect('/profesores');
    }
}
