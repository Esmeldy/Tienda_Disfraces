<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{  
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //datos a rellenar en la base de datos
            // 'name' => $this->faker->name(),
            // 'description' => $this->faker->realText(),
            // 'price' => $this->faker->randomFloat(null, 26.8, 69),
            // 'age' => $this->faker->randomElement(['Hombre','Mujer','Infantiles']),
            // 'image' => $this->faker->imageUrl(),
            // 'thematic_id' => $this->faker->randomElement([1,2,3,4,5,6,7]),
            // 'provider_id' => $this->faker->randomElement([1,2,3,4]),
        ];
    }
}
