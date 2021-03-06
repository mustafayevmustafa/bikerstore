<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pattern extends Model
{
    use HasFactory;

    protected $fillable = ['name','marka_id'];
    public function biker()
    {
        return $this->belongsTo(Biker::class);
    }

}
