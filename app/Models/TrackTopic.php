<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrackTopic extends Model
{
    protected $fillable = ['track_id', 'name', 'order'];

    public function track()
    {
        return $this->belongsTo(Track::class);
    }
}
