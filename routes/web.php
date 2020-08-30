<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/* Admin Routes*/
Route::prefix('admin')->name('admin.')->middleware('isLogin')->group(function (){
    Route::get('login','back\AuthController@login')->name('login');
    Route::post('login','back\AuthController@loginpost')->name('login.post');

});
Route::get('admin/login','back\AuthController@login')->name('admin.login');
Route::post('admin/login','back\AuthController@loginpost')->name('admin.login.post');
Route::prefix('admin')->name('admin.')->middleware('isAdmin')->group(function (){
    Route::get('panel','back\Dashboard@index')->name('dashboard');

                        /* ************About Route*********** */
    Route::get('/hakkinda','Back\AboutController@index')->name('about.index');
    Route::post('/hakkinda/update','Back\AboutController@update')->name('about.update');
                         /* ************Slider Route*********** */
    Route::get('/slider','Back\SliderController@index')->name('slider.index');
    Route::get('/slider/create','Back\SliderController@create')->name('slider.create');
    Route::post('/slider/create','Back\SliderController@create_post')->name('slider.create.post');
    Route::get('/slider/status','Back\SliderController@switch')->name('slider.switch');
    Route::get('/slider/update/{id}','Back\SliderController@update')->name('slider.update');
    Route::post('/slider/update/{id}','Back\SliderController@update_post')->name('slider.update.post');
    Route::get('/slider/delete/{id}','Back\SliderController@delete')->name('slider.delete');
    Route::get('/slider/orders','Back\SliderController@orders')->name('slider.orders');
                            /* ************Menu Route*********** */
    Route::get('/menu','Back\MenuController@index')->name('menu.index');
    Route::get('/menu/status','Back\MenuController@switch')->name('menu.switch');
    Route::get('/menu/create','Back\MenuController@create')->name('menu.create');
    Route::post('/menu/create','Back\MenuController@create_post')->name('menu.create.post');
    Route::get('/menu/orders','Back\MenuController@orders')->name('menu.orders');
    Route::get('/menu/update/{id}','Back\MenuController@update')->name('menu.update');
    Route::post('/menu/update/{id}','Back\MenuController@update_post')->name('menu.update.post');
    Route::get('/menu/delete/{id}','Back\MenuController@delete')->name('menu.delete');
                        /* ************Config Route*********** */
    Route::get('/config','Back\ConfigController@index')->name('config.index');
    Route::post('/config/update','Back\ConfigController@update')->name('config.update');
                        /* ************İnformation Route*********** */
    Route::get('/info','Back\InformationController@index')->name('info.index');
    Route::post('/info/update','Back\InformationController@update')->name('info.update');
                        /* ************Socials Route*********** */
    Route::get('/social','Back\SocialController@index')->name('social.index');
    Route::post('/social/update','Back\SocialController@update')->name('social.update');
                        /* ************Category Route*********** */
    Route::get('/category','Back\CategorieController@index')->name('categorie.index');
    Route::post('/category/create','Back\CategorieController@create')->name('categorie.create');
    Route::post('/category/update','Back\CategorieController@update')->name('categorie.update');
    Route::post('/category/delete','Back\CategorieController@delete')->name('categorie.delete');
    //ajax kullanarak kategori guncellenmesi
    Route::get('/category/getData','Back\CategorieController@getData')->name('categorie.getdata');
    Route::get('/category/status','Back\CategorieController@switch')->name('categorie.switch');
                    /* ************News(Content) Route*********** */
    //soft delete yapısı ile silinenleri göstermek için çöp kutusu
    Route::get('news/silinenler','Back\NewsController@trashed')->name('trashed.news');
    Route::resource('news','Back\NewsController');
    Route::get('/switch','Back\NewsController@switch')->name('switch');
    //İçeriği soft delete yapısı ile silmek için
    Route::get('/deleteNews/{id}','Back\NewsController@delete')->name('delete.news');
    // Silineni Sİlmek İçin Hard Delete
    Route::get('/hardNews/{id}','Back\NewsController@hardDelete')->name('hard.delete.news');
    // soft delete yapısı ile silinenleri geri getirmek için
    Route::get('/recoverNews/{id}','Back\NewsController@recover')->name('recover.news');
                 /* ************Contact Route*********** */
    Route::get('/contact/trashed','Back\ContactController@trashed')->name('contact.trashed');
    Route::get('/contact','Back\ContactController@index')->name('contact.index');
    Route::get('/contact/delete/{id}','Back\ContactController@delete')->name('contact.delete');
    // soft delete yapısı ile silinenleri geri getirmek için
    Route::get('/contact/recoverMessage/{id}','Back\ContactController@recover')->name('contact.recover');
    // Silineni Sİlmek İçin Hard Delete
    Route::get('/contact/hardMessage/{id}','Back\ContactController@hardDelete')->name('contact.hardDelete');
    //ajax kullanarak kategori guncellenmesi
    Route::get('/contact/getData','Back\ContactController@getData')->name('contact.getdata');
    Route::post('/contact/durum','Back\ContactController@durum')->name('contact.durum');
    Route::get('logout','back\AuthController@logout')->name('logout');

});

/* Bakim Route */
Route::get('site-bakimda',function (){
    return view('front.layout.bakim');
});


/* Front Routes*/
Route::get('/','Front\Homepage@index')->name('homepage');
Route::get('/about','Front\Homepage@about')->name('about');
Route::get('/contact','Front\Homepage@contact')->name('contact');
Route::post('/contact','Front\Homepage@contactpost')->name('contact.post');
Route::get('/news','Front\Homepage@news')->name('news');
Route::get('/newsDetail/{id}','Front\Homepage@newsDetail')->name('newsDetail');
Route::get('/kategori/{category}','Front\Homepage@category')->name('category');


//Route::get('/','Front\Homepage@index')->name('homepage');
