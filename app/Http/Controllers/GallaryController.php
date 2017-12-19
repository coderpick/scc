<?php

namespace App\Http\Controllers;
use App\Gallary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class GallaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallarys = Gallary::orderBy('id','DESC')->get();
        return view('admin.pages.gallarylist',compact('gallarys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.addgallary');
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
            $path = $request->file('image')->storeAs('public/gallary',$fileNameToStore);
        }else
        {
            $fileNameToStore="noimage.jpg";
        }

        $gallary = new Gallary();
        $gallary->title         = $request->title;
        $gallary->image         = $fileNameToStore;
        $gallary->save();
        return redirect()->route('gallary.index')->with('success','Gallary added successfully');
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
        $gallarys = Gallary::find($id);
        return view('admin.pages.editgallary',compact('gallarys'));
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
            $path = $request->file('image')->storeAs('public/gallary',$fileNameToStore);

        }
        $gallary = Gallary::find($id);
        $gallary->title         = $request->title;
        if ($request->hasFile('image'))
        {
            Storage::delete('public/gallary/'.$gallary->image);
            $gallary->image = $fileNameToStore;
        }
        $gallary->save();
        return redirect()->route('gallary.index')->with('success','Gallary updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallary = Gallary::find($id);
        if ($gallary->image !='noimage.jpg')
        {
            Storage::delete('public/gallary/'.$gallary->image);
        }
        $gallary->delete();

        return redirect()->route('gallary.index')->with('success','Gallay delete successfully');
    }
}
