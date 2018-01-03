<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Testimonial;
class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Testimonial::get();
        return view('admin.pages.reviewlist',compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.addreview');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' =>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        if ($request->hasFile('image'))
        {
            //get filename with the extension
            $filenamewithExt = $request->file('image')->getClientOriginalName();
            //get filename
            $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('image')->storeAs('images/',$fileNameToStore);
        }else
        {
            $fileNameToStore="noimage.jpg";
        }

        $reviews = new Testimonial();
        $reviews->title         = $request->title;
        $reviews->image         = $fileNameToStore;
        $reviews->save();
        return redirect()->route('testimonial.index')->with('success','Reviews added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reviews = Testimonial::find($id);
        return view('admin.pages.editreview',compact('reviews'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'             => 'required',
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
            $path = $request->file('image')->storeAs('images/',$fileNameToStore);

        }
        $reviews = Testimonial::find($id);
        $reviews->title         = $request->title;
        if ($request->hasFile('image'))
        {
            Storage::delete('images/'.$reviews->image);
            $reviews->image = $fileNameToStore;
        }
        $reviews->save();
        return redirect()->route('testimonial.index')->with('success','Review updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reviews = Testimonial::find($id);
        if ($reviews->image !='noimage.jpg')
        {
            Storage::delete('images/'.$reviews->image);
        }
        $reviews->delete();

        return redirect()->route('testimonial.index')->with('success','Review delete successfully');
    }
}
