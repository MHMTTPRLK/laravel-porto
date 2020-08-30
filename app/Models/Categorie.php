<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table='categories';
    public function newsCount()
    {
        return $this->hasMany('App\Models\News','category_id','id')->where('status',1)->count();
    }                           // Baglanacagımız model     // baglanacagımız sutun// baglanacak id
}
