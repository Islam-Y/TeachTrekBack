<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Candidate_social extends Model
{
    use HasFactory;

    protected $table = 'candidates_social';

    protected $fillable = [
        'social_links', 'email', 'phone_number', 'address', 'candidate_full_name_id'
    ];

    public function candidates_full_name()
    {
        $this->hasMany(Candidate_full_name::class);
    }

    public function candidates()
    {
        $this->belongsTo(Candidate::class);
    }
}
