<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function index()
   {
       $mesajlar=Contact::orderBy('durum','asc')->orderBy('created_at','desc')->get();
       return view('back.contact.index',compact('mesajlar'));
   }
   public function delete($id)
   {
       $contact=Contact::findOrFail($id)->delete();
       toastr()->success('Mesaj Başarılı Şekilde Silinen Mesajlara Taşındı');
       return redirect()->route('admin.contact.index');

   }
   public function trashed()
   {
       $contacts=Contact::onlyTrashed()->orderBy('deleted_at','desc')->get();
       return view('back.contact.trashed',compact('contacts'));
   }
    //silinenleri geri alıyoz.
   public function recover($id)
   {
       $contacts=Contact::onlyTrashed()->find($id)->restore();
       $sayi=0;
       $contact=Contact::find($id);
       $contact->durum=$sayi;
       $contact->save();
       toastr()->success('Mail Başarılı Şekilde Geri Alındı.');
        return redirect()->back();
   }
    //silinenleri siliyoruz.
   public function hardDelete($id)
   {
       $contacts=Contact::onlyTrashed()->find($id);
       $contacts->forceDelete();
       toastr()->success('Mail Başarılı Şekilde Silindi');
       return redirect()->route('admin.contact.index');
   }
    public  function getData(Request $request)
    {
        $contact=Contact::findOrFail($request->id);

        return response()->json($contact);
    }
    public function durum(Request $request)
    {
        $sayi=1;
        $contact=Contact::find($request->id);
        $contact->durum=$sayi;
        $contact->save();
        return redirect()->back();
    }


}
