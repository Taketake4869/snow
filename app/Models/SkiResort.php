<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkiResort extends Model
{
    use HasFactory;
    public function comments()   
{
    return $this->hasMany(Comment::class);  
}
    public function hotelSkiResorts()   
{
    return $this->hasMany(HotelSkiResort::class);  
}
    public function access()
{
    return $this->belongsToMany(Access::class);
}
    public function hotels(){
    return $this->belongsToMany(Hotel::class)->withPivot('distance');
}
}