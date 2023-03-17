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
        return [
            // 'name' =>$this->faker->name,
            // 'price'=>$this->faker->price,
            // 'auth'=>$this->faker->auth,
            // 'id_category'=>$this->faker->id_category


            'name' => $this->faker->name,
            'picture' => $this->faker->imageUrl(),
            'auth' => $this->faker->name,
            'description' => $this->faker->text(200),
            'category_id' => \App\Models\Category::inRandomOrder()->first()->id
        ];
    }
}
