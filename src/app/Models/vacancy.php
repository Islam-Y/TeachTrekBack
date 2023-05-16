<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vacancy extends Model
{
    use HasFactory;
    protected $table = 'vacancy';

    protected $fillable = [
        'name', 'salary', 'city_vacancy', 'underground', 'description', 'employer_id', 'duties', 'requirements', 'advantages_vacancy'
    ];

}
