<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Contactnumber;
class ContactNumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()    {

        $mobilenumbers = Contactnumber::get();
        return view('admin.pages.mobilenumber',compact('mobilenumbers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.addmobilenumber');
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
            'mobile'          => 'required|numeric|min:11',
            'department'      => 'required',
        ]);

        $mobile  = new Contactnumber();
        $mobile->mobile         = $request->mobile;
        $mobile->department           = $request->department;
        $mobile->save();
        return redirect()->route('mobile.index')->with('success','Number added successfully');
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
        $numbers = Contactnumber::find($id);
        return view('admin.pages.editmobilenumber',compact('numbers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'mobile'          => 'required|numeric|min:11',
            'department'      => 'required',
        ]);

        $mobile  = Contactnumber::find($id);
        $mobile->mobile         = $request->mobile;
        $mobile->department     = $request->department;
        $mobile->save();
        return redirect()->route('mobile.index')->with('success','Number update successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $number = Contactnumber::find($id);
        $number->delete();
        return redirect()->route('mobile.index')->with('success','Number delete successfully');
    }
}
