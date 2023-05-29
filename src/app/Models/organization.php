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
        'city_organization', ,
        'photo_id', 'number_employees', 'number_students',
        'description', 'description_mini', 'file_organization_id'
    ];


    public function social()
    {
        return $this->hasMany(organization_social::class);
    }

    public function employers()
    {
        return $this->hasMany(Employer::class);
    }

    public function vacancies()
    {
        return $this->hasMany(vacancy::class)->orderBy("created_at");
    }

    public function files()
    {
        return $this->hasMany(File::class)->orderBy("created_at");
    }
}
