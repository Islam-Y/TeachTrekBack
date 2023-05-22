<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;
    protected $table = 'organizations';

    protected $fillable = [
        'name', 'type', 'employer_id',
        'city_organization', 'vacancy_id',
        'photo_id', 'number_employees', 'number_students',
        'description', 'description_mini', 'file_organization_id'
    ];

    public function employers(){
        $this->hasMany(Employer::class);
    }

    public function vacancies(){
        $this->hasMany(Vacancy::class)->orderBy("created_at");
    }

    public function files(){
        $this->hasMany(File::class)->orderBy("created_at");
    }
}
