<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class candidate_education extends Model
{
    use HasFactory;

    protected $table = 'candidate_education';

    protected $fillable = [
        'name_educational_university', 'location_educational_university', 'institute', 'year_of_release', 'candidate_full_name_id'
    ];
}
