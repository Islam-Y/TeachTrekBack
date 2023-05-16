<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class candidate_info extends Model
{
    use HasFactory;
    protected $table = 'candidate_info';

    protected $fillable = [
        'floor', 'profession', 'specialization', 'city_candidate', 'description', 'files_candidate_id', 'photo_id', 'candidate_full_name_id'
    ];

}
