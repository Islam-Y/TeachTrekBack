<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class candidate_experience extends Model
{
    use HasFactory;
    protected $table = 'candidate_experience';

    protected $fillable = [
        'name_old_company', 'position_old_company', 'location_old_company', 'start_work', 'end_work', 'candidate_full_name'
    ];
}
