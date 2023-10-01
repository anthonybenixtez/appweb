<?php

namespace Database\Factories;
use App\Models\Alumno;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @var string
     * 
     */
    protected $model = Alumno::class;
    public function definition(): array
    {
        return [
        'nombre' =>$this->faker->name,
        'apellido' => $this->faker->lastName,
        'fechanacimiento' => $this->faker->date,
        'direccion' => $this->faker->address,
        'genero' => $this->faker->randomElement(['Masculino', 'Femenino']),
        'telefono' => $this->faker->numerify('########'), // Genera un número de 9 dígitos
        'correo' => $this->faker->unique()->safeEmail,
        'clave' => bcrypt('mi_password_secreto'),
        ];
    }
}
