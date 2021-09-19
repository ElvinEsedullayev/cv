<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tehsil;
class EducationController extends Controller
{
    public function index()
    {
        $tehsiller = Tehsil::orderByDesc('girme_tarix')->paginate(5);
        return view('back\tehsil\tehsil',compact('tehsiller'));
    }

    public function create()
    {
        return view('back\tehsil\create');
    }

    public function created()
    {
        $this->validate(request(),[
            'mekteb'=>'required',
            'uni'=>'required',
            'girme_tarix'=>'required',
        ]);
        $data = request()->only(['mekteb','uni','ixtisas','girme_tarix','bitme_tarix']);
        Tehsil::create($data);
        return redirect()->route('yonetim.tehsil')->with('success','Tehsil eklendi');
    }

    public function update($id)
    {
        $tehsil = Tehsil::find($id);
        return view('back\tehsil\update',compact('tehsil'));
    }

    public function updated($id)
    {
        $this->validate(request(),[
            'mekteb'=>'required',
            'uni'=>'required',
            'girme_tarix'=>'required',
        ]);
        $data = request()->only(['mekteb','uni','ixtisas','girme_tarix','bitme']);
        $tehsil = Tehsil::where('id',$id)->firstOrFail();
        $tehsil->update($data);
        return redirect()->back()->with('suceess','Tehsil yenilendi');
    }

    public function delete($id)
    {
        $tehsil = Tehsil::find($id);
        $tehsil->delete();
        return redirect()->route('yonetim.tehsil')->with('success','Tehsil silindi');
    }
}
