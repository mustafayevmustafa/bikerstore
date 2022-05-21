<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isEmpty;

class Biker extends Model
{
    use HasFactory;
    protected $table = 'bikers';
    protected $fillable = [
        'id',
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

    public function checkWishlist(){

        return  $this->hasMany(Wishlist::class )->where( 'user_id',Auth::guard('web')->user()->id )->select('id');

    }


    public function scopeFilter($query){

        if(request('marka') != ''){
            $query->where('marka_id',request('marka'));
        }

        if(request('model') != ''){
            $query->where('pattern_id',request('model'));

        }
        if(request('city') != ''){
            $query->where('city_id',request('city'));

        }

        if(request('price_min') != ''){
            $query->where('price','>=',request('price_min'));
        }
        if(request('price_max') != ''){
            $query->where('price','<=',request('price_max'));
        }

        if(request('date_min') != ''){
            $query->where('year','<=',request('date_min'));
        }
        if(request('date_max') != ''){
            $query->where('year','<=',request('date_max'));
        }

        if(request('kredit') != ''){
            $query->where('credit','<=',request('kredit'));
        }

        if(request('barter') != ''){
            $query->where('barter','<=',request('barter'));
        }

        return $query ;


    }

}
