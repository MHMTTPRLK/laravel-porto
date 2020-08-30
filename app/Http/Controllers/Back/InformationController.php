<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index()
    {
        $info=Information::find(1);
        return view('back.informations.index',compact('info'));
    }
    public function update(Request $request)
    {
        $info=Information::find(1);
        $info->tel=$request->tel;
        $info->gsm=$request->gsm;
        $info->fax=$request->fax;
        $info->email=$request->email;
        $info->address=$request->address;
        $info->city=$request->city;
        $info->street=$request->street;
        $info->hour=$request->hour;
        $info->hour1=$request->hour2;
        $info->save();
        toastSuccess('Ayarlar Başarıyla Güncellendi');
        return redirect()->back();

    }
}
