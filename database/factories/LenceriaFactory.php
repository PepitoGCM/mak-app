<?php

namespace Database\Factories;

use App\Models\Lenceria;
use Illuminate\Database\Eloquent\Factories\Factory;

class LenceriaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     * 
     * @var string
     */
    protected $model = Lenceria::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // nombre, descripcion, lenceria, talle, genero, foto
            'nombre' => $this->faker->sentence(2), 
            'descripcion' => $this->faker->paragraph(), 
            'lenceria' => $this->faker->randomElement(['conjunto', 'colaless', 'boxer', 'medias', 'vedetina']), 
            'talle' => $this->faker->randomDigit(),
            'genero' => $this->faker->randomElement(['hombre', 'mujer', 'unisex']),
            'foto'=> $this->faker->sentence()
        ];
    }
}
