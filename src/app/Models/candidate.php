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

    public function candidateFullName(): HasOne
    {
        return $this->hasOne(candidate_full_name::class);
    }
}
