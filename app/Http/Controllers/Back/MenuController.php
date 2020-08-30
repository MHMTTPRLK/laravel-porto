<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    // Menu Index
    public function index()
    {
            $menus=Menu::orderBy('order','asc')->get();
            return view('back.menus.index',compact('menus'));
    }
    // Menu Status Update
    public function switch(Request $request)
    {
        $menu=Menu::findOrFail($request->id);
        $menu->status=$request->statu=='true' ? 1:0;
        $menu->save();
    }
    //Page Order Controller
    public  function orders(Request $request)
    {
        foreach ($request->get('menu') as $key=>$order)
        {
            Menu::where('id',$order)->update(['order'=>$key]);
        }
    }
    // Menu Create(GET)
    public function create()
    {
        return view('back.menus.create');

    }
    // Menu Create(POST)
    public function create_post(Request $request)
    {
       $sonSira=Menu::orderBy('order','desc')->first();
        // Table boş ise slider_order+1 yapıyoruz
        if($sonSira==null)
        {
            $menu=new Menu();
            $menu->title=$request->title;
            $menu->status=$request->status;
            $menu->slug=Str::slug($request->title);
            $menu->order=$sonSira+0;
            $menu->save();
            toastSuccess('Menü Başarıyla Eklendi');
            return redirect()->route('admin.menu.index');

        }
        //Table Dolu ise $sonSira->slider_order+1 yapıyoruz.
        $menu=new Menu();
        $menu->title=$request->title;
        $menu->status=$request->status;
        $menu->slug=Str::slug($request->title);
        $menu->order=$sonSira->order+1;
        $menu->save();
        toastSuccess('Menü Başarıyla Eklendi');
        return redirect()->route('admin.menu.index');
        return view('back.menus.create');

    }
    //Menu Update(GET)
    public function update($id)
    {

        $menu=Menu::findOrFail($id);
        return view('back.menus.update',compact('menu'));
    }
    //Menu Update(POST)
    public function update_post(Request $request,$id)
    {
        $menu=Menu::findOrFail($id);
        $menu->title=$request->title;
        $menu->status=$request->status;
        $menu->slug=Str::slug($request->title);

        $menu->save();
        toastSuccess('Menü Başarıyla Güncellendi');
        return redirect()->route('admin.menu.index');

    }
    //Menu Delete
    public  function delete($id)
    {
        $menu=Menu::findOrFail($id)->delete();
        //$menu=DB::table('menus')->where('id',$id)->delete();
        toastSuccess('Menu Başarılı Şekilde Silindi');
        return redirect()->route('admin.menu.index');
    }
}
