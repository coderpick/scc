<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactlist;

class ContactController extends Controller
{

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'         => 'required',
            'mobile'       => 'required|numeric|min:12',
            'message'      => 'required',
        ]);

        $contact = new Contactlist();
        $contact->name         = $request->name;
        $contact->mobile        = $request->mobile;
        $contact->message      = $request->message;
        $contact->save();

        return redirect('/')->with('success','Thanks for contact us!');
    }


}
