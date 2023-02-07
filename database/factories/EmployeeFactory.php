<?php

namespace Database\Factories;

use Faker\Factory as Faker;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;
use Spatie\LaravelIgnition\Support\Composer\FakeComposer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = Faker::create();
        return [
            'name' => $faker->name(),
            'email' => $faker->email(),
            'date_in' => now(),
            'departement_id' => Arr::random([1,2,3,4,5,6,7]),
            'position' => Arr::random(["staff","leader","Assistent leader"])
        ];
    }
}
