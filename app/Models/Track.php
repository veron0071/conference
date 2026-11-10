<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $fillable = ['code', 'title', 'icon', 'color', 'order', 'is_active'];

    public function topics()
    {
        return $this->hasMany(TrackTopic::class)->orderBy('order');
    }

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}
