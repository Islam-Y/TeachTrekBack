<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate_experience extends Model
{
    use HasFactory;
    protected $table = 'candidates_experience';

    protected $fillable = [
        'name_old_company', 'position_old_company', 'location_old_company', 'start_work', 'end_work', 'candidate_full_name_id'
    ];

    public function candidates_full_name(){
        $this->hasMany(Candidate_full_name::class)->orderBy("created_at");
    }
}
