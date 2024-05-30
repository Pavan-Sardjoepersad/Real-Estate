<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $imageNumber = fake()->numberBetween(1,7);
        $imageName = "house_{$imageNumber}.jpg";

        return [
        'address' => fake()->streetAddress,
        'city' => fake()->city,
        'province' => fake()->state,
        'country' => fake()->country,
        'postal_code' => fake()->postcode,
        'description' => fake()->text,
        'price' => fake()->numberBetween(150000, 1000000),
        'bedrooms' => fake()->numberBetween(1, 5),
        'bathrooms' => fake()->numberBetween(1, 3),
        // 'slug' => fake()->slug,
        'slug' => $imageName,
        'home_sqft' => fake()->numberBetween(65, 200),
        'plot_sqft' => fake()->numberBetween(90, 250),
        'seller' => fake()->name,
        'status' => fake()->randomElement(['sold', 'for sale', 'negotiating', 'rented', 'for rent']),
        'type' => fake()->randomElement(['apartment', 'residential', 'villa']),
        // 'imageName' => $imageName,
        ];
    }
}
