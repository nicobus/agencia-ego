<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = "categories";
   

    
    public function cars(){
        return $this->hasMany('App\Car', 'category_id');
    }
}
