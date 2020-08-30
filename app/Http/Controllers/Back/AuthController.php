<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public  function login()
    {
        return view('back.auth.login');
    }
    public  function loginpost(Request $request)
    {
        //Çıkış Yapsak bile panel ulaşabiliyoruz bu yuzden middleware oluşturacaz.
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password]))
        {
           /* return "basarlı";
            die();*/
            toastSuccess('Tekraradan Hoşgeldiniz',Auth::user()->name);
            $data=Auth::user()->name;
            $datam=Auth::user()->authority;
            $pp=Auth::user()->image;
            $request->session()->put('userData',$data);
            $request->session()->put('userDatam',$datam);
            $request->session()->put('profilePhoto',$pp);

            return  redirect()->route('admin.dashboard');

        }
        return  redirect()->route('admin.login')->withErrors('Email Adresi veya Şifre Hatalı');

    }
    public function logout()
    {
        Auth::logout();
        return  redirect()->route('admin.login');
    }
}
