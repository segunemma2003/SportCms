<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    //
    protected $guarded=['id'];



    public function fixtures(){
        return $this->hasMany('App\Fixtures');
    }
}
