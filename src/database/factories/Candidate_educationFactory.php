<?php

namespace Database\Factories;

use App\Models\Candidate_education;
use Illuminate\Database\Eloquent\Factories\Factory;

class Candidate_educationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Candidate_education::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name_educational_university" => $this->faker->name(),
            "location_educational_university" => $this->faker->text(),
            "institute" => $this->faker->text(),
            "year_of_release" => $this->faker->text(),
        ];
    }
}
