<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition()
    {
        $title = $this->faker->words(5, true);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomNumber(1,100),
            'old_price' => $this->faker->randomNumber(1,100),
            'image' => $this->faker->imageUrl(800, 600, 'cats'),
            'subcategory_id' => $this->faker->numberBetween(1,5)
        ];
    }
}
