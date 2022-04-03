<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Ban extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','image'];

    protected static function boot() {
        parent::boot();

        static::creating(function ($ban) {
            $ban->slug = Str::slug($ban->name);
        });
        static::updating(function ($ban) {
            $ban->slug = Str::slug($ban->name);
        });
    }
}
