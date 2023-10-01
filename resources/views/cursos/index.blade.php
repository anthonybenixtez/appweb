@extends('layouts.app')


@section('content')
            <!-- Formulario para agregar nuevos cursos en una caja -->
            <div class="card mt-3">
                <div class="card-body">
                    <h2>Agregar curso mediante Insert</h2>
                    <div class="container my-form">
                        <!-- Formulario para agregar nuevos cursos -->
                        <form method="POST" action="/cursos">
                            @csrf
                            <div class="form-group">
                                <label for="nombrecurso">Nombre del Curso:</label>
                                <input type="text" name="nombrecurso" class="form-control" required>
                            </div>
                    
                            <div class="form-group">
                                <label for="año">Año:</label>
                                <input type="text" name="año" class="form-control" required>
                            </div>
                    
                            <div class="form-group">
                                <label for="ciclo">Ciclo:</label>
                                <input type="text" name="ciclo" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="profesor_id">Profesor:</label>
                                <input type="text" name="profesor_id" class="form-control" required>

                            <button type="submit" class="btn btn-primary">Agregar curso</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <h1>Lista de Cursos con DB:: SELECT</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre del Curso</th>
                <th>Año</th>
                <th>Ciclo</th>
                <th>Id del profesor</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
                <tr>
                    <td>{{ $curso->nombrecurso }}</td>
                    <td>{{ $curso->año }}</td>
                    <td>{{ $curso->ciclo }}</td>
                    <td>{{ $curso->profesor_id }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <a href="{{ route('home') }}" class="btn btn-primary">Volver a Home</a>
</div>
@endsection
