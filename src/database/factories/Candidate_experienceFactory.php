<?php

namespace Database\Factories;

use App\Models\Candidate_experience;
use Illuminate\Database\Eloquent\Factories\Factory;

class Candidate_experienceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Candidate_experience::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();

        return [
            "name_old_company" => $faker->name(),
            "position_old_company" => $faker->text(),
            "location_old_company" => $faker->text(),
            "start_work" => $faker->numberBetween(2000, 2023),
            "end_work" => $faker->numberBetween(2000, 2023),
        ];
    }
}
