<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate_education extends Model
{
    use HasFactory;

    protected $table = 'candidates_education';

    protected $fillable = [
        'name_educational_university', 'location_educational_university', 'institute', 'year_of_release', 'candidate_full_name_id'
    ];

    public function candidates_full_name(){
        $this->hasMany(Candidate_full_name::class);
    }
}
