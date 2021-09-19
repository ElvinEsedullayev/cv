<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Social;
class SocialController extends Controller
{
            public function index()
    {
        $socials = Social::orderByDesc('created_at')->paginate(5);
        return view('back.social.social',compact('socials'));
    }
    public function create()
    {
        return view('back.social.create');
    }
    public function created()
    {
        $this->validate(request(),[
            'name'=>'required',
            'link'=>'required'
        ]);
        $data = request()->only(['name','link']);
        Social::create($data);
        return redirect()->route('yonetim.social')->with('success','Sosial eklendi');
    }
    public function update($id)
    {
        $social = Social::find($id);
        return view('back.social.update',compact('social'));
    }
    public function updated($id)
    {
        $this->validate(request(),[
            'name'=>'required',
            'link'=>'required'
        ]);
        $data = request()->all();
        $social = Social::where('id',$id)->firstOrFail();
        $social->update($data);
        return redirect()->route('yonetim.social')->with('success','Social guncellendi');
    }
    public function delete($id)
    {
        $social = Social::find($id);
        $social->delete();
        return redirect()->back()->with('success','Social silindi');
    }
}
