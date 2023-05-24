<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer_info extends Model
{
    use HasFactory;
    protected $table = 'employers_info';

    protected $fillable = [
        'name', 'surname', 'patronymic', 'employer_id'
    ];

    public function employers(){
        $this->hasMany(Employer::class);
    }
}
