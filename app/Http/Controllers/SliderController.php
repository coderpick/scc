<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            'image'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);
        if ($request->hasFile('image'))
        {
            //Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('image')->storeAs('slider/',$fileNameToStore);


        }else{
            $fileNameToStore = 'noimage.jpg';
        }
       $slider = new Slider();
       $slider->title       = $request->title;
       $slider->description = $request->description;
       $slider->image       = $fileNameToStore;
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
        if ($request->hasFile('image'))
        {
            //Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('image')->storeAs('slider/',$fileNameToStore);


        }
        $slider  = Slider::find($id);
        $slider->title       = $request->title;
        $slider->description = $request->description;
        if ($request->hasFile('image'))
        {
            Storage::delete('slider/'.$slider->image);
            $slider->image = $fileNameToStore;
        }
        $slider->save();
        return redirect()->route('slider.index')->with('success','Slider Content update successfully');
    }


    public function destroy($id)
    {
        $slider = Slider::find($id);
        if ($slider->image !='noimage.jpg')
        {
            Storage::delete('slider/'.$slider->image);
        }
        $slider->delete();
        return redirect()->route('slider.index')->with('success','Slider content delete successfully');
    }
}
