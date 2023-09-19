<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlide;

class HomeSliderController extends Controller
{
    public function Homeslider(){
        $homeslide=HomeSlide::find(1);
        return view('admin.home_slide.home_slide_all',compact('homeslide'));
    }



    
    public function update(Request $request){
        $user=HomeSlide::where('id',1)->first();
        $user->title=$request->title;
        $user->short_title=$request->short_title;
        $user->video_url=$request->video_url;
        if($request->file('home_slide')){
            $file=$request->file('home_slide');

            $filename=date('slider').$file->getClientOriginalName();
            $file->move(public_path('upload/adminmages'),$filename);
            $user['home_slide']=$filename;
        }
        $user->save();
        if (!$user) {
            return redirect()->back()->with('error','something Went Wrong');
        }
        return redirect()->route('home.slide')->with('success','Saved Successfully');
     
    }

}



