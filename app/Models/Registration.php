<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'reg_number',
        'full_name',
        'academic_title',
        'email',
        'phone',
        'institution',
        'country',
        'category',
        'track_id',
        'attendance_type',
        'paper_title',
        'abstract',
        'payment_proof',
        'payment_status',
        'admin_notes',
    ];

    public function track()
    {
        return $this->belongsTo(Track::class);
    }

    public static function generateRegNumber()
    {
        do {
            $number = 'ICSET27-' . strtoupper(substr(bin2hex(random_bytes(3)), 0, 5));
        } while (static::where('reg_number', $number)->exists());

        return $number;
    }
}
