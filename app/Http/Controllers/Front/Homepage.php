<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Categorie;
use App\Models\Config;
use App\Models\Contact;
use App\Models\Menu;
use App\Models\News;
use App\Models\Slider;
use Illuminate\Http\Request;
use Mail;
use Validator;
use DB;

use Illuminate\View\View;

class Homepage extends Controller
{
    public function __construct()
    {
        if(Config::find(1)->active==0)
        {
            return redirect()->to('site-bakimda')->send();
        }
        View()->share('menus',Menu::where('status',1)->orderBy('order','ASC')->get());
        View()->share('abouts',About::find(1));
        View()->share('sliders',Slider::where('status',1)->orderBy('slider_order','ASC')->get());
        View()->share('newss',News::where('status',1)->orderBy('created_at','desc')->limit(2)->get());
        view()->share('categorys',Categorie::where('status',1)->orderBy('name','asc')->limit(8)->get());

    }

    public function index()
    {
        return view('front.homepage');
    }
    public function about()
    {
        //$abouts=About::find(1);
        $abouts=DB::table('abouts')->find(1);
        return view('front.about',compact('abouts'));
    }

    public function news()
    {

        $news=News::where('status',1)->orderBy('created_at','desc')->get();
            return view('front.news.news',compact('news'));
    }
    public function newsDetail($id)
    {
        $newsDetail=News::findOrFail($id);
            return view('front.news.news_detail',compact('newsDetail'));
    }
    public function category($slug)
    {
        $category= Categorie::whereSlug($slug)->first() ?? abort(403,'Böyle Bir Kategori Bulunamadı');

        $data['category']=$category;
        $data['news']=News::Where('category_id',$category->id)->where('status',1)->orderBy('created_at','Desc')->paginate(2);
        return view('front.category',$data);
    }
    public function contact()
    {
        return view('front.contact');
    }
    public function contactpost(Request $request)
    {

        $rules=[
            'name'=>'required|min:5',
            'email'=>'required|email',
            'topic'=>'required',
            'message'=>'required|min:10',


        ];
        $validate=Validator::make($request->post(),$rules);
        if($validate->fails())
        {
            return redirect()->route('homepage')->withErrors($validate)->withInput();
            die();
        }
      Mail::send([],[],function ($message)use($request){
            $message->from('iletisim@blogsitesi.com','Blog Sitesi');
            $message->to('mhmttparlak@gmail.com');
            $message->setBody('Mesajı Gönderen:'.$request->name.'<br>
                        Mesajı Gönderen Mail:'.$request->email.'<br/>
                        Mesaj Konusu:'.$request->topic.'<br/>
                        Mesaj:'.$request->message.'<br/><br/>
                        Mesaj Gönderilme Tarihi:'.now().'','text/html');
            $message->subject($request->name.'iletişimden mesaj gönderdi!');
        });
        $contact=new Contact();
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->topic=$request->topic;
        $contact->durum=0;
        $contact->message=$request->message;
        $contact->save();

        return redirect()->route('contact')->with('success','İletişim Mesajınız bize İletildi.');
    }
}
