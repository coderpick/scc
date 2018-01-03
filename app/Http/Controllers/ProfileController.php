<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //

    public function index()
    {
        return view('admin.pages.profile');
    }


    public function edit($id)
    {
        return view('admin.pages.updateProfile');
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'name'      =>'required',
            'email'     =>'required|email',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $user =User::find($id);
        $user->name       = $request->name;
        $user->email      = $request->email;
        $user->password   =bcrypt($request->password);
        $user->save();

        return redirect()->route('profile')->with('success','Profile update successfully');
    }
}
