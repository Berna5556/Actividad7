<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UsuariosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'usuario' => $this->faker->name(),
            'correo' => $this->faker->unique()->safeEmail(),
            'password' => $this->faker->md5(),
            'rol' => 'Estudiante',
        ];
    }
}
