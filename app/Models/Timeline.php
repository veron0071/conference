<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    protected $fillable = [
        'date_string',
        'title',
        'description',
        'badge',
        'status',
        'order',
        'is_active',
    ];
}
