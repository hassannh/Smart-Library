<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\books>
 */
class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        $category = \App\Models\Category::inRandomOrder()->first();
        return [
            'name' => $this->faker->name,
            'picture' => $this->faker->name,
            'auth' => $this->faker->name,
            'description' => $this->faker->text(60),
            'category_id' => $category ? $category->id : \App\Models\Category::factory()->create()->id,
        ];
    }
}
