<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Candidate extends Model
{
    use HasFactory;
    protected $table = 'candidates';

    protected $fillable = [
        'email', 'password'
    ];

    public function fullName(): HasOne
    {
        return $this->hasOne(candidate_full_name::class);
    }

    public function info(): HasOne
    {
        return $this->hasOne(candidate_info::class);
    }

    public function social(): HasOne
    {
        return $this->hasOne(candidate_social::class);
    }
}
