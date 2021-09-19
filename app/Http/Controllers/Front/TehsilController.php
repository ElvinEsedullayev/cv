<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tehsil;
class TehsilController extends Controller
{
    public function index()
    {
        $educations = Tehsil::all();
        return view('front\tehsil',compact('educations'));
    }
}
