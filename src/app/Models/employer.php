<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employer extends Model
{
    use HasFactory;
    protected $table = 'employers';

    protected $fillable = [
        'email', 'password'
    ];

    public function employer_info(): HasOne
    {
        return $this->hasOne(employer_info::class);
    }
}
