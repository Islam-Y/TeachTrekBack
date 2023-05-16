<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employer_info extends Model
{
    use HasFactory;
    protected $table = 'employer_info';

    protected $fillable = [
        'name', 'surname', 'patronymic', 'employer_id'
    ];

}
