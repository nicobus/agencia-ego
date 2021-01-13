<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    

    public function categoria(){
        return $this->belongsTo('App\Category', 'category_id');
    }
}