<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate_full_name extends Model
{
    use HasFactory;
    protected $table = 'candidates_full_name';

    protected $fillable = [
        'name', 'surname', 'patronymic', 'candidate_id'
    ];

    public function candidates(){
        $this->hasMany(Candidate::class);
    }
}
