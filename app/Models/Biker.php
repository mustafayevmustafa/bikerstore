<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biker extends Model
{
    use HasFactory;

    protected $fillable = [
        'fuel_id',
        'description',
        'fuel_id',
        'credit',
        'barter',
        'hit',
        'image',
        'price',
        'city_id',
        'vehicle_id',
        'marka_id',
        'pattern_id',
        'customer_id',
        'category_id',
        'color_id',
    ];

    public function marka()
    {
        return $this->belongsTo(Marka::class);
    }
}
