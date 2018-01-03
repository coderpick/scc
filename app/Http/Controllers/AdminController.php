<?php

namespace App\Http\Controllers;
use App\Contactlist;
use DB;
use App\Newsletter;
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
        $contacts = Contactlist::orderBy('id','DESC')->get();
        return view('admin.pages.contactlist',compact('contacts'));
    }

    public  function ViewContactInfo($id)
    {
        $contact = Contactlist::find($id);
        DB::table('contactlists')->where('id',$contact->id)->update(['status' => 1]);
        return view('admin.pages.viewContactinfo',compact('contact'));
    }

    public function showNewsLetterEmail()
    {
        $emails = DB::table('newsletters')->get();

       return view('admin.pages.newsletterEmail',compact('emails'));
    }

    public function deleteNewsLetterEmail($id)
    {

        DB::table('newsletters')->where('id',$id)->delete();
        return redirect()->route('newsletteremail')->with('success','Email delete successfully');
    }
    public function destroy($id)
    {
        DB::table('contactlists')->where('id',$id)->delete();
        return redirect()->route('contact.show')->with('success','Contact message delete successfully');
    }
}
