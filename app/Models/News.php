<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    protected $table='news';
    use SoftDeletes;
   public function getCategory()
   {
       return $this->hasOne('App\Models\Categorie','id','category_id');
   }                                // Baglanacagımız model // baglanacagımız sutun// baglanacak id
}
