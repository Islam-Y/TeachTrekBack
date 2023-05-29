<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization_social extends Model
{
    use HasFactory;
    protected $table = 'organizations_social';

    protected $fillable = [
        'social_links', 'phone_number', 'address', 'organization_id'
    ];

    public function organizations(){
        return $this->belongsTo(Organization::class);
    }
}
