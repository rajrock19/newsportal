<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class AboutController extends Controller
{
    public function Homeslider(){
        $homepage=About::find(1);
        return view('admin.home_slide.home_slide_all',compact('homepage'));
    }

}
