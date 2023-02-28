<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    { 
        $faker = Faker::create();

        return [
            'name' => $faker->name(),
            'email' => $faker->unique()->safeEmail(),
            'password' => Hash::make($faker->password())
        ];
    }
}
