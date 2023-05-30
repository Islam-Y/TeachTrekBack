<?php

namespace Database\Factories;

use App\Models\Candidate_social;
use Illuminate\Database\Eloquent\Factories\Factory;

class Candidate_socialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Candidate_social::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "social_links" => $this->faker->text(),
            "phone_number" => $this->faker->numberBetween(10000000000, 99999999999),
            "address" => $this->faker->text(),
        ];
    }
}
