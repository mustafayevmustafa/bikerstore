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
        'user_id',
        'category_id',
        'color_id',
        'price',
        'km',
        'year',
        'contact_name',
        'contact_mail',
        'contact_phone',
        'ban_id',
    ];
    
    protected $casts = [
        'barter' => 'boolean',
        'credit' => 'boolean',
        'year'   => 'datetime',
     ];

    public function marka()
    {
        return $this->belongsTo(Marka::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function pattern()
    {
        return $this->belongsTo(Pattern::class);
    }
}
