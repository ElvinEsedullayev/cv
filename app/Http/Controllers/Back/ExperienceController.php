<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Experience;
class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::orderByDesc('is_girme_tarix')->paginate(5);
        return view('back.tecrube.tecrube',compact('experiences')); 
    }

    public function create()
    {
        return view('back.tecrube.create');
    }

    public function created()
    {
        $this->validate(request(),[
            'is_adi'=>'required',
            'is_yeri'=>'required',
            'is_girme_tarix'=>'required',
            'is_aciqlama'=>'required'
        ]);
        $data = request()->only(['is_adi','is_yeri','is_girme_tarix','is_cixma_tarix','is_davam','is_aciqlama']);
        Experience::create($data);
        return redirect()->route('yonetim.tecrube')->with('success','Tecrube eklendi');
    }

    public function update($id)
    {
        $experiences = Experience::find($id);
        return view('back\tecrube\update',compact('experiences'));
    }

    public function updated($id)
    {
        $this->validate(request(),[
            'is_adi'=>'required',
            'is_yeri'=>'required',
            'is_girme_tarix'=>'required',
            'is_aciqlama'=>'required'
        ]);
        $data = request()->only(['is_adi','is_yeri','is_girme_tarix','is_cixma_tarix','is_davam','is_aciqlama']);
        $experience = Experience::where('id',$id)->firstOrFail();
        $experience->update($data);
        return redirect()->back()->with('success','Tecrube guncellendi');
    }

    public function delete($id)
    {
        $experience=Experience::find($id);
        $experience->delete();
        return redirect()->route('yonetim.tecrube')->with('success','Tecrube silindi');
    }
}
