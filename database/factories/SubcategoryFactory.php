<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subcategory>
 */
class SubcategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $subcategory = $this->faker->unique()->name;
        return [
            'name' => $subcategory,
            'slug' => Str::slug($subcategory),
            'category_id' => $this->faker->numberBetween(1,5),
        ];
    }
}
