<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;
    protected $table = 'vacancies';

    protected $fillable = [
        'name', 'salary', 'city_vacancy', 'underground', 
        'description', 'employer_id', 'duties', 'requirements', 'advantages_vacancy',
        'organization_id'
    ];

    public function employers()
    {
        $this->hasMany(Employer::class);
    }

    public function organizations()
    {
        $this->belongsTo(organization::class);
    }
}
