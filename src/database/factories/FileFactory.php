<?php

namespace Database\Factories;

use App\Models\Employer;
use App\Models\User;
use App\Models\File;
use Illuminate\Database\Eloquent\Factories\Factory;

class FileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = File::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => function () {
                return User::factory()->create()->id;
            },
            'employer_id' => function () {
                return Employer::factory()->create()->id;
            },
            'filename' => $this->faker->word . '.txt',
            // Другие поля файла...
        ];
    }
}
