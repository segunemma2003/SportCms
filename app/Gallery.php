<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    protected $guarded=['id'];


    public function post()
    {
        return  $this->belongsTo('App\Post');
    }
}
