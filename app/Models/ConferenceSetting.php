<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConferenceSetting extends Model
{
    protected $fillable = ['key', 'value', 'group'];

    public static function getByKey($key, $default = null)
    {
        $setting = static::where('key', $key)->first();
        return $setting ? $setting->value : $default;
    }

    public static function getAllAsArray()
    {
        return static::pluck('value', 'key')->toArray();
    }
}
