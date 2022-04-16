<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marka extends Model
{
    use HasFactory;

    protected $fillable = ['name','image'];
    public function biker()
    {
        return $this->belongsTo(Biker::class);
    }
}
