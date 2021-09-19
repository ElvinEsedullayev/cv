<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Social;
class AnasayfaController extends Controller
{
    public function index()
    {
        $users = User::with('detay')->where('created_at')->first();
        $socials = Social::all();
        return view('front\haqqimda',compact('users','socials'));
    }
}
