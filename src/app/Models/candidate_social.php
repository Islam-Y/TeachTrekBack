<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class candidate_social extends Model
{
    use HasFactory;
    protected $table = 'candidate_social';

    protected $fillable = [
        'social_links', 'email', 'phone_number', 'address', 'candidate_full_name_id'
    ];

}
