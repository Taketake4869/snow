<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
        public function hotelSkiResorts()
{
    return $this->hasMany(HotelSkiResort::class);
}
    public function ski_resorts(){
    return $this->belongsToMany(SkiResort::class);
}
}
