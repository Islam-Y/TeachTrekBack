<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organization_social extends Model
{
    use HasFactory;
    protected $table = 'organization_social';

    protected $fillable = [
        'social_links', 'phone_number', 'address', 'organization_id'
    ];

}
