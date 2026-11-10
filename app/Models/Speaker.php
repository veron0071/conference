<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    protected $fillable = [
        'role',
        'name',
        'title',
        'institution',
        'university',
        'country',
        'flag',
        'topic',
        'status',
        'image',
        'bio',
        'order',
        'is_active',
    ];
}
