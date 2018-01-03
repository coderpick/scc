<?php

namespace App\Http\Controllers;
use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallerys = Gallery::orderBy('id','DESC')->get();
        return view('admin.pages.gallerylist',compact('gallerys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.addgallery');
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
            $path = $request->file('image')->storeAs('gallery/',$fileNameToStore);
        }else
        {
            $fileNameToStore="noimage.jpg";
        }

        $gallery = new Gallery();
        $gallery->title         = $request->title;
        $gallery->image         = $fileNameToStore;
        $gallery->save();
        return redirect()->route('gallery.index')->with('success','Gallery added successfully');
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
        $gallerys = Gallery::find($id);
        return view('admin.pages.editgallery',compact('gallerys'));
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
            $path = $request->file('image')->storeAs('gallery/',$fileNameToStore);

        }
        $gallery = Gallery::find($id);
        $gallery->title         = $request->title;
        if ($request->hasFile('image'))
        {
            Storage::delete('gallery/'.$gallery->image);
            $gallery->image = $fileNameToStore;
        }
        $gallery->save();
        return redirect()->route('gallery.index')->with('success','Gallery updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        if ($gallery->image !='noimage.jpg')
        {
            Storage::delete('gallery/'.$gallery->image);
        }
        $gallery->delete();

        return redirect()->route('gallery.index')->with('success','Gallery delete successfully');
    }
}
