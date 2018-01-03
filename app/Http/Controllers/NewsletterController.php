<?php

namespace App\Http\Controllers;
use App\Newsletter;
use ClassesWithParents\D;
use DB;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {


        $this->validate($request,[
            'email' => 'required|email',
        ]);

        $email = $request->email;
        DB::table('newsletters')->insert([
            'email'=>$email,
            'created_at'=>\Carbon\Carbon::now()->toDateTimeString(),
            'updated_at'=>\Carbon\Carbon::now()->toDateTimeString(),
        ]);

    }
}
