@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2 class="text-center mb-4">¡Iniciaste sesión correctamente!</h2>
                    
                    <div class="text-center">
                        <a href="{{ route('alumnos.index') }}" class="btn btn-primary btn-lg">Ver Alumnos (select/insert)</a>
                        <a href="{{ route('profesores.index') }}" class="btn btn-primary btn-lg">Ver Profesores (select/insert)</a>
                    </div>

                    <hr class="my-4">

                    <div class="text-center">
                        <a href="{{ route('cursos.index') }}" class="btn btn-primary btn-lg">Ver Cursos (select/insert)</a>
                        <a href="{{ route('notas.index') }}" class="btn btn-primary btn-lg">Ver Notas (select/insert)</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
