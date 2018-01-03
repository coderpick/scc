<?php

namespace App\Http\Controllers;
use DB;
use App\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      //$services = DB::table('services')->get();

      $services = Services::orderBy('id','DESC')->get();
      return view('admin.pages.servicelist',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.addservice');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $this->validate($request,[

            'title'             => 'required',
            'slug'             => 'required',
            'description'       => 'required',
            'image'             => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);
         // Handle File Upload
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


         }else{
             $fileNameToStore = 'noimage.jpg';
         }
        $service  = new Services;
        $service->title         = $request->title;
        $service->slug          = str_slug($request->slug);
        $service->description   = $request->description;
        $service->image         = $fileNameToStore;
        $service->save();

        return redirect()->route('services.index')->with('success','Service added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(Services $services)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit(Services $services,$id)
    {
        $service = Services::find($id);
        return view('admin.pages.editservice',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'title'             => 'required',
            'description'       => 'required',
           // 'image'             => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
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
        $service = Services::find($id);
        $service->title         = $request->title;
        $service->description   = $request->description;
        if ($request->hasFile('image'))
        {
            Storage::delete('images/'.$service->image);
            $service->image = $fileNameToStore;
        }
        $service->save();
       // Services::find($id)->update($request->all());
        return redirect()->route('services.index')->with('success','Service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $service = Services::find($id);
         if ($service->image !='noimage.jpg')
         {
            Storage::delete('images/'.$service->image);
         }
         $service->delete();

        return redirect()->route('services.index')->with('success','Service delete successfully');
    }
}
