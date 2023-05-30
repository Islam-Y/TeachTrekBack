<?php

namespace Database\Factories;

use App\Models\Candidate_info;
use App\Models\File;
use App\Models\Photo;
use Illuminate\Database\Eloquent\Factories\Factory;

class Candidate_infoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Candidate_info::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $file = File::factory()->create();
        $photo = Photo::factory()->create();

        return [
            "floor" => $this->faker->text(),
            "profession" => $this->faker->text(),
            "specialization" => $this->faker->text(),
            "city_candidate" => $this->faker->text(),
            "description" => $this->faker->text(),
            "file_candidate_id" => $file->id,
            "photo_id" => $photo->id,
        ];
    }
}
