<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    protected $fillable = [
        'name',
        'role',
        'division',
        'affiliation',
        'order',
    ];
}
