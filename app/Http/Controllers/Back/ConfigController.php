<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use function GuzzleHttp\Psr7\str;

class ConfigController extends Controller
{
    public  function index()
    {
        $config=Config::find(1);

        return view('back.configs.index',compact('config'));
    }
    public  function update(Request $request)
    {
        $config=Config::find(1);
        $config->title=$request->title;
        $config->active=$request->active;
        $config->description=$request->keywords;
        $config->site_url=$request->site_url;
        $config->author=$request->author;
        $config->googlemap=$request->googlemap;
        $config->analystic=$request->analystic;
        $config->smptp_port=$request->smptp_port;
        $config->smptp_password=$request->smptp_password;
        if($request->hasFile('logo'))
        {
            $logo=Str::slug($request->title).'-logo.'.$request->logo->getClientOriginalExtension();
            $request->logo->move(public_path('Logo_Image'),$logo);
            $config->logo='Logo_Image/'.$logo;
        }
        if($request->hasFile('favicon'))
        {
            $favicon=Str::slug($request->title).'-favicon.'.$request->favicon->getClientOriginalExtension();
            $request->favicon->move(public_path('Logo_Image'),$favicon);
            $config->favicon='Logo_Image/'.$favicon;
        }
        $config->save();
        toastSuccess('Ayarlar Başarıyla Güncellendi');
        return redirect()->back();

    }

}
