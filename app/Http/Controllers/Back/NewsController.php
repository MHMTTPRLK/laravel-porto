<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\News;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{

    // İndex Sayfası Yönlendirme(GET)
    public function index()
    {
        $news=News::orderBy('created_at','ASC')->get();
        return view('back.news.index',compact('news'));
    }

    // Create Sayfasına Yönlerdirme(GET)
    public function create()
    {
        $categories=Categorie::all();
        return view('back.news.create',compact('categories'));
    }

    //Create Sayfası İşlemi(POST)
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'min:3',
            'image'=>'required|image|mimes:jpeg,png,jpg|max:2048',
            'author'=>'required',
        ]);
            $news=new News();
            $news->title=$request->title;
            $news->category_id=$request->category;
            $news->content=$request->editor;
            $news->status=$request->status;
            $news->author=$request->author;
            $news->slug=Str::slug($request->title);
            if($request->hasFile('image'))
            {
                $imageName=Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('uploads'),$imageName);
                $news->image='uploads/'.$imageName;
                $news->save();
                toastr()->success('Başarılı', 'İçerik Başarıyla Eklendi');
                return redirect()->route('admin.news.index');
            }

    }

    // $id veya ilgili bilgi gösterme Sayfası Yönlendirme
    public function show($id)
    {
        /*$news=News::findOrFail($id);
        $ad=$news->title;
        return  $id.'li ürünün adı= '.$ad;*/
    }

    // Update Sayfası Yönlendirme(GET)
    public function edit($id)
    {
        $news=News::findOrFail($id);
        $categories=Categorie::all();
        return view('back.news.update',compact('news','categories'));
    }

    // Update Sayfası İşlemi(POST)
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'min:3',
            'image'=>'image|mimes:jpeg,png,jpg|max:2048',

        ]);
        $news= News::findOrFail($id); //Yeni veri Eklemek İçin kullanılır ::insert ile aynı.
        $news->title=$request->title;
        $news->category_id=$request->category;
        $news->content=$request->editor;
        $news->slug=Str::slug($request->title);
        $news->author=$request->author;
        if($request->hasFile('image'))
        {
            $randomSayi=rand(1,100);
            $imageName=Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName.$randomSayi);
            $news->image='uploads/'.$imageName.$randomSayi;

        }
        $news->save();
        toastr()->success('Başarılı', 'İçerik Başarıyla Güncellendi');
        return redirect()->route('admin.news.index');

        /*  Article::insert([
             'title'=>"deneme",
              'category_id'=>"2",
        vb.

          ]);*/

    }
    public function switch(Request $request)
    {
        // return $request->id;
        $news=News::findOrFail($request->id);
        $news->status=$request->statu=='true' ? 1 : 0;
        $news->save();
    }

   //soft delete yapısı
    public function delete($id)
    {
        $news=News::findOrFail($id)->delete();
        toastr()->success('İçerik Başarılı Şekilde Silinen İçeriklere Taşındı');
        return redirect()->route('admin.news.index');
    }
    // silinenleri soft delete yapısı ile oldugu için sildik silinenleri bize gösteriyor.
    public function trashed()
    {
        $news=News::onlyTrashed()->orderBy('deleted_at','desc')->get();
        return view('back.news.trashed',compact('news'));
    }
    //silinenleri geri alıyoz.
    public function recover($id)
    {
        News::onlyTrashed()->find($id)->restore();
        toastr()->success('İçerik Başarılı Şekilde Geri Alındı.');
        return redirect()->back();
    }

    //soft delete ile  hard silindi
    public function hardDelete($id)
    {

        $news=News::onlyTrashed()->find($id);
        if(File::exists($news->image))
        {
            File::delete(public_path($news->image));

        }

        $news->forceDelete();
        toastr()->success('İçerik Başarılı Şekilde Silindi');
        return redirect()->route('admin.news.index');

    }
    public function destroy($id)
    {

    }
}
