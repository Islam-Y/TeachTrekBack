<?php

namespace Database\Factories;

use App\Models\Employer_info;
use Illuminate\Database\Eloquent\Factories\Factory;

class Employer_infoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employer_info::class;

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
