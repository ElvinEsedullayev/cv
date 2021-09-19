<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::orderByDesc('created_at')->paginate(5);
        return view('back.bacariq.bacariq',compact('skills'));
    }
    public function create()
    {
        return view('back.bacariq.create');
    }
    public function created()
    {
        $this->validate(request(),[
            'name'=>'required'
        ]);
        $data = request()->only(['name']);
        Skill::create($data);
        return redirect()->route('yonetim.bacariq')->with('success','Bacariq eklendi');
    }
    public function update($id)
    {
        $skill = Skill::find($id);
        return view('back.bacariq.update',compact('skill'));
    }
    public function updated($id)
    {
        $this->validate(request(),[
            'name'=>'required'
        ]);
        $data = request()->all();
        $skill = Skill::where('id',$id)->firstOrFail();
        $skill->update($data);
        return redirect()->route('yonetim.bacariq')->with('success','Bacariq guncellendi');
    }
    public function delete($id)
    {
        $skill = Skill::find($id);
        $skill->delete();
        return redirect()->back()->with('success','Bacariq silindi');
    }
}
