<?php

namespace Database\Factories;


use App\Models\Candidate_full_name;
use Illuminate\Database\Eloquent\Factories\Factory;

class Candidate_full_nameFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Candidate_full_name::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "surname" => $this->faker->text(),
            "patronymic" => $this->faker->text(),
        ];
    }
}
