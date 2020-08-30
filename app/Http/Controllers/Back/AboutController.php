<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;



class AboutController extends Controller
{
    public  function index()
    {
        $abouts=About::find(1);
        return view('back.abouts.about',compact('abouts'));
    }
    public function update(Request $request)
    {
        $about=About::find(1);
        $about->name=$request->name;
        $about->about_content=$request->about_content;
        $about->about_video=$request->about_video;
        $about->about_vizyon=$request->about_vizyon;
        $about->about_misyon=$request->about_misyon;
        $about->save();
        toastSuccess("Başarıyla Güncellendi");
       return redirect()->back();

    }
}
