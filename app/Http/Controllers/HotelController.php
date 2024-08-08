<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    public function index(Hotel $hotel){
        return view('hotels.index')->with(['hotels' => $hotel->get()]);
    }
}
