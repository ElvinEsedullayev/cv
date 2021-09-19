<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Userdetay;
use Illuminate\Support\Facades\Auth;//auth istifade etmek ucun kitabxanani elave edirik
use Illuminate\Support\Facades\Hash;//kod ucun yazilir
class AboutController extends Controller
{
    public function index()
    {
        $users = User::with('detay')->orderByDesc('created_at')->paginate(5);
        return view('back.haqqimda.haqqimda',compact('users'));
    }
    public function create()
    {
        return view('back\haqqimda\create');
    }
    public function created()
    {
        $this->validate(request(),[
            'name'=>'required',
            'surname'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'adres'=>'required',
            'phone'=>'required',
            'about'=>'required'
        ]);
        $data = request()->only(['name','surname','email','about','adres','phone']);
        if(request()->filled('password')){//eger sifre dolu ise
            $data['password']=Hash::make(request('password'));
        }
         $user=User::create($data);
        //User::create($request->post());
            if(request()->hasFile('sekil')){//requestden sekil gelibmi
            $this->validate(request(),[
                'sekil'=>'image|mimes:jpeg,png,jpg,gif|max:5000'
            ]);
            $userimage = request()->file('sekil');
            $userimage = request()->sekil;
            $dosyadi=$user->id. '-'. time(). '.'. $userimage->extension();
            if($userimage->isValid()){
                $userimage->move('uploads/users',$dosyadi);
                       Userdetay::updateOrCreate(
                             ['user_id'=>$user->id],
                            ['adres'=>request('adres'),'phone'=>request('phone'),'about'=>request('about'),'sekil'=>$dosyadi]
                        );
            }
        }
 
        return redirect()->back()
        ->with('success','User basarili sekilde eklendi');
    }

    public function update($id)
    {
        $user = User::with('detay')->find($id);
        return view('back\haqqimda\update',compact('user'));
    }
    public function updated($id)
    {
            $this->validate(request(),[
            'name'=>'required',
            'surname'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'adres'=>'required',
            'phone'=>'required',
            'about'=>'required'
        ]);
        $data = request()->only(['name','surname','email']);
        $data_detay =request()->only(['about','adres','phone']);
        if(request()->filled('password')){//eger sifre dolu ise
            $data['password']=Hash::make(request('password'));
        }
         $user=User::where('id',$id)->firstOrFail();
        //User::create($request->post());
        $user->update($data);
        $user->detay->update($data_detay);
            if(request()->hasFile('sekil')){//requestden sekil gelibmi
            $this->validate(request(),[
                'sekil'=>'image|mimes:jpeg,png,jpg,gif|max:5000'
            ]);
            $userimage = request()->file('sekil');
            $userimage = request()->sekil;
            $dosyadi=$user->id. '-'. time(). '.'. $userimage->extension();
            if($userimage->isValid()){
                $userimage->move('uploads/users',$dosyadi);
                       Userdetay::updateOrCreate(
                             ['user_id'=>$user->id],
                            ['sekil'=>$dosyadi]
                        );
            }
        }
        
        return redirect()->back()
        ->with('success','User basarili sekilde yenilendi');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->detay()->delete();
        $user->delete();
        return redirect()->route('yonetim.about')->with('success','User silindi');
    }
}
