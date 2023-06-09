<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Candidate_full_name extends Model
{
    use HasFactory;
    protected $table = 'candidates_full_name';

    protected $fillable = [
        'name', 'surname', 'patronymic', 'user_id'
    ];

    public function users(){
        $this->belongsTo(User::class);
    }

    public function info(): HasOne
    {
        return $this->hasOne(candidate_info::class);
    }
}
