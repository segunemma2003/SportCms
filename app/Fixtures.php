<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fixtures extends Model
{
    //
    protected $guarded=['id'];


    public function competition()
    {
        return $this->belongsTo('App\Category');
    }
    public function season(){
        return $this->belongsTo('App\Season');
    }
    public function home(){
        return $this->belongsTo('App\Team');
    }
    public function away(){
        return $this->belongsTo('App\Team');
    }
    public function scorer()
    {
        return  $this->hasMany('App\Scorer');
    }
}
