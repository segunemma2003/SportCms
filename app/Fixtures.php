<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fixtures extends Model
{
    //
    protected $guarded=['id'];


    public function competitions()
    {
        return $this->belongsTo('App\Category','competition','id');
    }
    public function seasons(){
        return $this->belongsTo('App\Season','season_id','id');
    }
    public function homeTeam(){
        return $this->belongsTo('App\Team','home','id');
    }
    public function awayTeam(){
        return $this->belongsTo('App\Team','away','id');
    }
    public function scorer()
    {
        return  $this->hasMany('App\Scorer');
    }
}
