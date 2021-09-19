<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
class BacariqController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        return view('front\bacariq',compact('skills'));
    }
}
