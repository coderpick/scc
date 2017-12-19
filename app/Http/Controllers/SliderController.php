<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    //
    public function index()
    {
        $sliders = Slider::get();
        return view('admin.pages.sliderlist',compact('sliders'));
    }

    public  function create()
    {
        return view('admin.pages.addslider');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title' =>'required',
            'description' =>'required',
        ]);
       $slider = new Slider();
       $slider->title       = $request->title;
       $slider->description = $request->description;
       $slider->save();
        return redirect()->route('slider.index')->with('success','Slider Content added successfully');
    }


    public function edit($id)
    {
        $slider = Slider::find($id);

        return view('admin.pages.editslider',compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' =>'required',
            'description' =>'required',
        ]);
        $slider  = Slider::find($id);
        $slider->title       = $request->title;
        $slider->description = $request->description;
        $slider->save();
        return redirect()->route('slider.index')->with('success','Slider Content update successfully');
    }


    public function destroy($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        return redirect()->route('slider.index')->with('success','Slider content delete successfully');
    }
}
