<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;//auth istifade etmek ucun kitabxanani elave edirik
use Illuminate\Support\Facades\Hash;//kod ucun yazilir
class AuthController extends Controller
{
    public function index()
    {
        return view('back\auth\login');
    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required'
        ]);
       $pas=$request->password;
       $yeni =md5($pas);
               if(Auth::attempt(['email' => $request->post('email'),'password' =>$request->post('password')]))
        {
            return redirect()->route('home');
        }else{
            return redirect()->route('login.index')->withErrors('Email ve ya sifre sehvdir');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.index');
    }
}
