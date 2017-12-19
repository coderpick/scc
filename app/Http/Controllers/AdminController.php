<?php

namespace App\Http\Controllers;
use App\Contactlist;
use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
  public function index()
    {
    	return view('admin.dashboard');
    }

    public  function show()
    {
        $contacts = Contactlist::get();
        return view('admin.pages.contactlist',compact('contacts'));
    }

    public  function ViewContactInfo($id)
    {
        $contact = Contactlist::find($id);
        DB::table('contactlists')->where('id',$contact->id)->update(['status' => 1]);
        return view('admin.pages.viewContactinfo',compact('contact'));
    }

    public function destroy($id)
    {
        DB::table('contactlists')->where('id',$id)->delete();
        return redirect()->route('contact.show')->with('success','Contact message delete successfully');
    }
}
