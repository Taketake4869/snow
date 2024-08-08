<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SkiResort;
use App\Models\Comment;

class SkiResortController extends Controller
{
    public function index(SkiResort $ski_resort){
        return view('skiResorts.index')->with(['ski_resorts' => $ski_resort->get()]);
    }
    public function show($ski_resort_id,Comment $comment){
        $comments = $comment->getBySkiResortId($ski_resort_id);
        $ski_resort = SkiResort::with('hotels')->where('id', $ski_resort_id)->first();
    return view('skiResorts.show')->with(['ski_resort' => $ski_resort,'comments'=>$comments ]);
}
}
