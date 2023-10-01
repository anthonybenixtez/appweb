<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index()
    {
        // Obtener la lista de profesores
        $cursos = DB::select('SELECT * FROM cursos');

        // Retornar la vista con los datos
        return view('cursos.index', ['cursos' => $cursos]); // Corrige el nombre de la vista
    }

    public function store(Request $request)
    {
        // Validar y obtener los datos del formulario
        $data = $request->validate([
            'nombrecurso' => 'required|string',
            'año' => 'required|string',
            'ciclo' => 'required|string',
            'profesor_id' => 'required|string',
        ]);

        // Insertar los datos en la tabla de profesores utilizando el método insert
        DB::table('cursos')->insert($data); // Corrige el nombre de la tabla

        return redirect('/cursos');
    }
}
