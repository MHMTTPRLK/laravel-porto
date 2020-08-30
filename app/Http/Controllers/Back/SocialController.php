<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Information;
use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function index()
    {
        $social=Social::find(1);

        return view('back.socials.index',compact('social'));
    }
    public function update(Request $request)
    {
        $social=Social::find(1);
        $social->facebook=$request->facebook;
        $social->twitter=$request->twitter;
        $social->instagram=$request->instagram;
        $social->linkedin=$request->linkedin;
        $social->youtube=$request->youtube;
        $social->github=$request->github;
        $social->save();
        toastSuccess('Ayarlar Başarıyla Güncellendi');
        return redirect()->back();

    }
}
