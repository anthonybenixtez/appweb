<?php

namespace Database\Factories;
use App\Models\Profesor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class ProfesorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @var string
     * 
     */
    protected $model = Profesor::class;
    public function definition(): array
    {
        return [
        'nombre' =>$this->faker->name,
        'apellido' => $this->faker->lastName,
        'dui' => $this->faker->numerify('#########'), // Genera un número de 9 dígitos
        'telefono' => $this->faker->numerify('########'), // Genera un número de 9 dígitos
        'correo' => $this->faker->unique()->safeEmail,
        'clave' => bcrypt('mi_password_secreto'),
        ];
    }
}