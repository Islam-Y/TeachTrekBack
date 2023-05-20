<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate_info extends Model
{
    use HasFactory;
    protected $table = 'candidates_info';

    protected $fillable = [
        'floor', 'profession', 'specialization', 'city_candidate', 'description', 'file_candidate_id', 'photo_id', 'candidate_full_name_id'
    ];

    public function candidates_full_name(){
        $this->hasMany(Candidate_full_name::class)->orderBy("created_at");
    }

    public function files(){
        $this->hasMany(File::class)->orderBy("created_at");
    }
}
