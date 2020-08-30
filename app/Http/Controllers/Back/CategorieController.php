<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CategorieController extends Controller
{
    // Category Index
   public function index()
   {
       $categorys=Categorie::all();
       return view('back.category.index',compact('categorys'));
   }
    // Category Create
   public function create(Request $request)
   {
       // Aynı Kategori var mı?
       $varMi=Categorie::whereSlug(Str::slug($request->category_name))->first();
       if($varMi)
       {
           toastError($request->category_name.' adında bir kategori zaten mevcut!');
           return redirect()->back();
       }
       $category=new Categorie();
       $category->name=$request->category_name;
       $category->slug=Str::slug($request->category_name);
       $category->save();
       toastSuccess('Kategori Başarıyla Oluşturuludu.');
       return redirect()->back();

   }
    // Category Update
    public function update(Request $request)
    {
        $isSlug=Categorie::whereSlug(str::slug($request->slug))->first();
        $isName=Categorie::whereName(($request->category))->first();
        if($isSlug or $isName)
        {
            toastError($request->category_name. ' adında bir kategori zaten mevcut!');
            return  redirect()->back();
        }
        $category=Categorie::find($request->id);
        $category->name=$request->category_name;
        $category->slug=str::slug($request->category_slug);
        $category->save();
        toastSuccess('Kategori Başarıyla Güncellendi.');
        return redirect()->back();
        /*  Category::insert([
             'name'=>"deneme",
              'slug'=>"denemee",
        vb.

          ]);*/
    }
    // Category Delete
    public function delete(Request $request)
    {
        $category=Categorie::findOrFail($request->id);
        if($category->id==1)
        {
            toastError('Bu Kategori Silinemez.');
            return redirect()->back();
        }
        $count=$category->newsCount();
        $message='';
        if($count>0)
        {
            News::where('category_id',$category->id)->update(['category_id'=>1]);
            $defaultCategory=Categorie::find(1);
            $message='Bu Kategoriye Ait '. $count .' makale '. $defaultCategory->name . ' Kategorisine Taşındı.';

        }
        $category->delete();
        toastSuccess('Başarıyla Silindi. ',$message);

        return redirect()->back();
    }
    public  function getData(Request $request)
    {
        $category=Categorie::findOrFail($request->id);
        return response()->json($category);
    }
    // Category Status Update
    public function switch(Request $request)
    {
        $category=Categorie::findOrFail($request->id);
        $category->status=$request->statu=='true' ? 1 : 0;
        $category->save();

    }

}
