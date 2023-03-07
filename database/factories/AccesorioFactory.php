<?php

namespace Database\Factories;

use App\Models\Accesorio;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccesorioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     * 
     * @var string
     */
    protected $model = Accesorio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // nombre, descripcion, accesorio, alto, largo, profundidad, foto
            'nombre' => $this->faker->sentence(2), 
            'descripcion' => $this->faker->paragraph(), 
            'accesorio' => $this->faker->randomElement(['bandolera', 'llaveros', 'billetera', 'pilusos', 'etc']), 
            'alto' => $this->faker->randomDigit(),
            'largo' => $this->faker->randomDigit(),
            'profundidad' => $this->faker->randomDigit(),
            'foto'=> $this->faker->sentence()
        ];
    }
}
