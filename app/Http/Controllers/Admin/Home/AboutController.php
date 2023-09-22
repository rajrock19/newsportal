<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\About;

class AboutController extends Controller
{
    public function aboutPage(){
        $about=About::find(1);
        return view('admin.about_page.about_page_all',compact('about'));
    }

}
