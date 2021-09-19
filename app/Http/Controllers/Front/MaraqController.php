<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Maraq;
class MaraqController extends Controller
{
    public function index()
    {
        $maraqlar = Maraq::all();
        return view('front\maraq',compact('maraqlar'));
    }
}
