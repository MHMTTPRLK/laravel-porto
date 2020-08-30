<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;

class SliderController extends Controller
{
    // Page Index
    public  function index()
    {
        $sliders=Slider::orderBy('slider_order','asc')->get();
       // $sliders=DB::table('sliders')->orderBy('slider_order','asc')->get();
        return view('back.sliders.slider',compact('sliders'));
    }
    // Page Status Control
    public function switch(Request $request)
{
    $slider=Slider::findOrFail($request->id);
    $slider->status=$request->statu=='true' ? 1:0;
    $slider->save();
}
    // Page Index(GET)
    public function create(Request $request)
    {
        return view('back.sliders.create');
    }
    // Page Index(POST)
    public  function create_post(Request $request)
    {
          $request->validate([
            'slider_name'=>'min:3',
            'slider_image'=>'required|image|mimes:jpeg,png,jpğ|max:4096',
         ]);


              $sonSira=Slider::orderBy('slider_order','desc')->first();
              // Table boş ise slider_order+1 yapıyoruz
             if($sonSira==null)
             {
                 $slider=new Slider();
                 $slider->slider_name=$request->slider_name;
                 $slider->status=$request->status;
                 $slider->slider_order=$sonSira+1;
                 $slider->slider_slug=Str::slug($request->slider_name);

                 if($request->hasFile('slider_image'))
                 {
                     $imageName=Str::slug($request->slider_name).'.'.$request->slider_image->getClientOriginalExtension();
                     $request->slider_image->move(public_path('sliderImages'),$imageName);
                     $slider->slider_image='sliderImages/'.$imageName;
                     $slider->save();
                     toastSuccess('Slider Başarıyla Eklendi');
                     return redirect()->route('admin.slider.index');
                 }
             }
             //Table Dolu ise $sonSira->slider_order+1 yapıyoruz.
         $slider=new Slider();
         $slider->slider_name=$request->slider_name;
         $slider->status=$request->status;
         $slider->slider_order=$sonSira->slider_order+1;
         $slider->slider_slug=Str::slug($request->slider_name);

         if($request->hasFile('slider_image'))
         {
             $imageName=Str::slug($request->slider_name).'.'.$request->slider_image->getClientOriginalExtension();
             $request->slider_image->move(public_path('sliderImages'),$imageName);
             $slider->slider_image='sliderImages/'.$imageName;
             $slider->save();
             toastSuccess('Slider Başarıyla Eklendi');
             return redirect()->route('admin.slider.index');
         }
    }
    // Page update(GET)
    public function update($id)
    {
        $sliders=Slider::findOrFail($id);
        return view('back.sliders.update',compact('sliders'));
    }
    // Page Update(POST)
    public function update_post(Request $request,$id)
    {
        $request->validate([
            'slider_name'=>'min:3',
            'slider_image'=>'required|image|mimes:jpeg,png,jpğ|max:4096',
        ]);

        $sliders=Slider::findOrFail($id);
        $sliders->slider_name=$request->slider_name;
        $sliders->slider_slug=Str::slug($request->slider_name);

        if($request->hasFile('slider_image'))
        {
            $randomSayi=rand(1,100);
            $imageName=Str::slug($sliders->slider_name).'.'.$request->slider_image->getClientOriginalExtension();
            $request->slider_image->move(public_path('sliderImages'),$imageName.$randomSayi);
            $sliders->slider_image='sliderImages/'.$imageName.$randomSayi;

        }
        $sliders->save();
        toastSuccess('Slider Başarıyla Güncellendi');
        return  redirect()->route('admin.slider.index');


    }
    // Page Delete
    public function delete($id)
    {
        $slider=Slider::findOrFail($id)->delete();
        //$slider=DB::table('sliders')->where('id',$id)->delete();
        toastSuccess('Slider Başarılı Şekilde Silindi');
        return redirect()->route('admin.slider.index');
    }
    //Page Order Controller
    public  function orders(Request $request)
    {
        foreach ($request->get('page') as $key=>$slider_order)
        {
            Slider::where('id',$slider_order)->update(['slider_order'=>$key]);
        }
    }


}
