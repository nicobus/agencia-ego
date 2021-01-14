<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    

    public function categoria(){
        return $this->belongsTo('App\Category', 'category_id');
    }

    public function scopeCarsByCategory($query, $category){
        return $query->select('cars.*')->join('categories', 'category_id', '=', 'categories.id')
        ->where('categories.id', '=', "$category");
    }
}
