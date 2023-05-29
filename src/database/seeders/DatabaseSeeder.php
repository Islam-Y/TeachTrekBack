<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\AdminUser;
use App\Models\Candidate_education;
use App\Models\Candidate_experience;
use App\Models\Candidate_full_name;
use App\Models\Candidate_info;
use App\Models\Candidate_social;
use App\Models\Employer;
use App\Models\Employer_info;
use App\Models\File;
use App\Models\Organization;
use App\Models\Organization_social;
use App\Models\User;
use App\Models\Vacancy;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

         AdminUser::factory(1)->create([
             'email' => 'laravel@laravel.com',
             'password' => bcrypt(12345),
         ]);

        User::factory(10)->create();

        Candidate_education::factory(10)->create();

        Candidate_experience::factory(10)->create();

        Candidate_full_name::factory(10)->create();

        Candidate_info::factory(10)->create();

        Candidate_social::factory(10)->create();

        Employer::factory(10)->create();

        Employer_info::factory(10)->create();

        File::factory(10)->create();

        Organization::factory(10)->create();

        Organization_social::factory(10)->create();

        Vacancy::factory(10)->create();
    }
}
