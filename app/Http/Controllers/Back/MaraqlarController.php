<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Maraq;
class MaraqlarController extends Controller
{
        public function index()
    {
        $maraqlar = Maraq::orderByDesc('created_at')->paginate(5);
        return view('back.maraqlar.maraq',compact('maraqlar'));
    }
    public function create()
    {
        return view('back.maraqlar.create');
    }
    public function created()
    {
        $this->validate(request(),[
            'name'=>'required',
            'description'=>'required'
        ]);
        $data = request()->only(['name','description']);
        Maraq::create($data);
        return redirect()->route('yonetim.interest')->with('success','Maraq eklendi');
    }
    public function update($id)
    {
        $maraq = Maraq::find($id);
        return view('back.maraqlar.update',compact('maraq'));
    }
    public function updated($id)
    {
        $this->validate(request(),[
            'name'=>'required',
            'description'=>'required'
        ]);
        $data = request()->all();
        $maraq = Maraq::where('id',$id)->firstOrFail();
        $maraq->update($data);
        return redirect()->route('yonetim.interest')->with('success','Maraq guncellendi');
    }
    public function delete($id)
    {
        $maraq = Maraq::find($id);
        $maraq->delete();
        return redirect()->back()->with('success','Maraq silindi');
    }
}
