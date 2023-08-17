<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    public function index(){
        return view('admin.auth.login');
    }

    public function create(){
        return view('admin.auth.register');
    }

    public function store(Request $request){

     $user =new User();
     $user->name=$request->name;
     $user->email=$request->email;
     $user->password=Hash::make($request->password);
     $user->save();
        
     if (!$user) {
        return redirect()->back()->with('Something Went Wrong');
    }

    return redirect()->route('admin.login')->with('success','Saved Successfully');

    }
}
