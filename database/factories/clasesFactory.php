<?php

namespace Database\Factories;

use App\Models\clase;
use Illuminate\Database\Eloquent\Factories\Factory;

class clasesFactory extends Factory
{
    protected $model = clase::class;


    //@return array
    public function definition()
    {
        return [
            'name'=>$this->faker->sentence(),
            'descripcion'=>$this->faker->paragraph(),
            'precio'=>$this->faker->randomNumber(),
            'existencias'=>$this->faker->randomNumber(),
            'proveedor'=>$this->faker->randomElement(['Amway', ' Johnson & Johnson', 'Colgate Palmolive'])
        ];
    }
}
