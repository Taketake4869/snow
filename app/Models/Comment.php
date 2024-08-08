<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function skiResort()
{
    return $this->belongsTo(skiResort::class);
}
    public function user()
{
    return $this->belongsTo(user::class);
}
    public function getBySkiResortId($ski_resort_id){
    return $this->where('ski_resort_id', $ski_resort_id)->get();
}
}
