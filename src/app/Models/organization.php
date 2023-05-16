<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organization extends Model
{
    use HasFactory;
    protected $table = 'organization';

    protected $fillable = [
        'name', 'type', 'employer_id', 'city_organization', 'vacancies_id', 'photo_id', 'number_employees', 'number_students', 'description', 'description_mini', 'files_organization_id'
    ];

}
