<?php

namespace Database\Factories;

use App\Models\Bijouterie;
use Illuminate\Database\Eloquent\Factories\Factory;

class BijouterieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     * 
     * @var string
     */
    protected $model = Bijouterie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // nombre, descripcion, acero, bijouterie, largo, diametro, talle, foto
            'nombre' => $this->faker->sentence(2), 
            'descripcion' => $this->faker->paragraph(), 
            'acero' => $this->faker->randomElement(['blanco', 'quirurgico']), 
            'bijouterie' => $this->faker->randomElement(['aros', 'argolla', 'cadenas', 'collares', 'dijes', 'abridores', 'pulseras', 'tobilleras', 'anillos', 'esclavas', 'macrame', 'piercing', 'perforadora descartable', 'perforadora reutilizable', 'etc']), 
            'largo' => $this->faker->randomDigit(),
            'diametro' => $this->faker->randomDigit(),
            'talle' => $this->faker->randomDigit(),
            'foto'=> $this->faker->sentence()
        ];
    }
}
