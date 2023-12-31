<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use bcrypt;

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


    public function authentgficate(Request $request){
    
       $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
 
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
               
        if (auth()->user()->roles != 1) {
            return redirect()->back()->with('error','Permission denied');  
        }
        
        // activity()->causedBy(auth()->user())->performedOn(auth()->user())->event('login')
        // ->useLog('login')
        // ->log('username : '.auth()->user()->name);
        
            return redirect()->route('admin.dashboard')->with('Login successfully');
         }else {
            return redirect()->back()->with('error','Invalid login credentials');
         }
        return redirect()->route('login')->with('error','Access Denied');

    }

    public function authenticate(Request $request){
    
     $validator =Validator::make($request->all(),[
        'email'=>'required',
        'password'=>'required'
     ]);

     if($validator->fails()){
      return redirect()->back()->withInput()->withErrors($validator);
     }

     $credentials=$request->only('email','password');
     if(Auth::attempt($credentials)){

    return redirect()->route('admin.dashboard')->with('Login Successfully');
     }else {
        return redirect()->back()->with('error','Invalid login credentials');
         
     }
    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return Redirect()->route('admin.login');
    }
 

    public function profile_show(){
        return view('admin.auth.profileshow');
    }
    public function dashnboard (){
        return view('admin.dashboard');
    }

    
    public function profile_update(){
        $user=User::where('id',auth()->user()->id)->first();
        return view('admin.auth.profileupdate',compact('user'));
    }
    

    public function update(Request $request){
        $user=User::where('id',auth()->user()->id)->first();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->mobile=$request->mobile;
        if($request->file('image')){
            $file=$request->file('image');

            $filename=date('news').$file->getClientOriginalName();
            $file->move(public_path('upload/adminmages'),$filename);
            $user['image']=$filename;
        }
        $user->save();
        if (!$user) {
            return redirect()->back()->with('error','something Went Wrong');
        }
        return redirect()->route('admin.profile.show')->with('success','Saved Successfully');
     
    }

    public function change_password(){
        return view('admin.auth.changepassword');
    }

    public function changepassowrd_update(Request $request){
    // dd(auth()->user()->id);

    // $user_oldpassword=Hash::check($request->old_password,auth()->user()->password );

    $validateData=$request->validate([
        'old_password'=>'required',
        'new_password'=> 'required',
        'confirm_password'=>'required|same:new_password',
    ]);

    $hasedpassowrd=auth()->user()->password;
    if(Hash::check($request->old_password, $hasedpassowrd)){
        $users =User::find(Auth::id());
        $users->password=Hash::make($request->new_password);
        $users->save();
        session()->flash('message','Password Updated Successfully');
         return redirect()->back();
    }else{

        session()->flash('message','Old  Password is not Match');
        return redirect()->back();
    }
    }
}
