<?php

namespace App\Http\Controllers;
use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index()
    {
        $about = About::get();
        return view('admin.pages.about',compact('about'));
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'about'  =>'required',
        ]);
        $user =About::find($id);
        $user->about   = $request->about;
        $user->save();
        return redirect()->route('about')->with('success','About Content successfully');
    }
}
