<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id(); // Campo autoincremental para la clave primaria
            $table->string('nombre');
            $table->string('apellido');
            $table->date('fechanacimiento');
            $table->string('direccion');
            $table->string('genero'); // Campo de tipo string para género
            $table->unsignedBigInteger('telefono'); // Campo entero de 9 dígitos
            $table->string('correo')->unique(); // Campo único para el correo
            $table->string('clave'); // Campo para la clave encriptada
            $table->timestamps();
        });

        Schema::create('profesor', function (Blueprint $table) {
            $table->id(); // Campo autoincremental para la clave primaria
            $table->string('nombre');
            $table->string('apellido');
            $table->unsignedBigInteger('dui');
            $table->unsignedBigInteger('telefono'); // Campo entero de 9 dígitos
            $table->string('correo')->unique(); // Campo único para el correo
            $table->string('clave'); // Campo para la clave encriptada
            $table->timestamps();
        });

        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nombrecurso');
            $table->unsignedBigInteger('año');
            $table->string('ciclo');
            // Crear la llave foránea
            $table->unsignedBigInteger('profesor_id'); // mismo tipo que la clave primaria en la tabla padre
            $table->foreign('profesor_id')->references('id')->on('profesor');
            $table->timestamps();
        });

        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nota1');
            $table->unsignedBigInteger('nota2');
            $table->unsignedBigInteger('nota3');
            $table->unsignedBigInteger('nota4');
            $table->unsignedBigInteger('promedio');
            $table->unsignedBigInteger('parcial');
            // Crear la llave foránea
            $table->unsignedBigInteger('alumno_id'); // mismo tipo que la clave primaria en la tabla padre
            $table->foreign('alumno_id')->references('id')->on('alumnos');

            // Crear la llave foránea
            $table->unsignedBigInteger('cursos_id'); // mismo tipo que la clave primaria en la tabla padre
            $table->foreign('cursos_id')->references('id')->on('cursos');
      
            // Crear la llave foránea
            $table->unsignedBigInteger('profesor_id'); // mismo tipo que la clave primaria en la tabla padre
            $table->foreign('profesor_id')->references('id')->on('profesor');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
        Schema::dropIfExists('notas');
        Schema::dropIfExists('profesor');
        Schema::dropIfExists('cursos');

    }
};
