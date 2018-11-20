<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allcategory extends Model
{
    protected $guarded=['id'];

    public function post()
    {
        return  $this->belongsToMany('App\Post')->withTimestamps();
    }
    
}
