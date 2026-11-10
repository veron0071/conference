<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgrammeSession extends Model
{
    protected $fillable = [
        'day',
        'time_start',
        'time_end',
        'time_label',
        'badge',
        'title',
        'description',
        'location',
        'order',
        'is_active',
    ];

    protected $casts = [
        'day' => 'integer',
        'order' => 'integer',
        'is_active' => 'boolean',
    ];
}
