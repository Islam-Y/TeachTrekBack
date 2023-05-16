<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class candidate_full_name extends Model
{
    use HasFactory;
    protected $table = 'candidate_full_name';

    protected $fillable = [
        'name', 'surname', 'patronymic', 'candidate_id'
    ];

}
