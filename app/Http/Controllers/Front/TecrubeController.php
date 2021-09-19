<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Experience;
class TecrubeController extends Controller
{
    public function index()
    {
        $experiences = Experience::all();
        return view('front\tecrube',compact('experiences'));
    }
}
