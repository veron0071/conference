<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistrationFee extends Model
{
    protected $fillable = [
        'category',
        'early_bird',
        'regular',
        'is_featured',
        'features',
        'order',
        'is_active',
    ];

    protected $casts = [
        'features' => 'array',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];
}
