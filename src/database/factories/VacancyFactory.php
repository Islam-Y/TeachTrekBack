<?php

namespace Database\Factories;
use App\Models\Vacancy;
use Illuminate\Database\Eloquent\Factories\Factory;

class VacancyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vacancy::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->text(),
            "salary" => $this->faker->text(),
            "city_vacancy" => $this->faker->text(),
            "underground" => $this->faker->text(),
            "description" => $this->faker->text(),
            "duties" => $this->faker->text(),
            "requirements" => $this->faker->text(),
            "advantages_vacancy" => $this->faker->text(),
        ];
    }
}
