<?php

namespace Database\Factories;

use App\Models\File;
use App\Models\Organization;
use App\Models\Photo;
use App\Models\Vacancy;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrganizationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Organization::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $file = File::factory()->create();
        $photo = Photo::factory()->create();
        $vacancy = Vacancy::factory()->create();

        return [
            "name" => $this->faker->text(),
            "type" => $this->faker->text(),
            "city_organization" => $this->faker->text(),
            "number_employees" => $this->faker->numberBetween(50, 100),
            "number_students" => $this->faker->numberBetween(100, 300),
            "description" => $this->faker->text(),
            "description_mini" => $this->faker->text(),
            "file_candidate_id" => $file->id,
            "photo_id" => $photo->id,
            "vacancy_id" => $vacancy->id,
        ];
    }
}
