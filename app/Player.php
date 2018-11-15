<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //
    protected $guarded=['id'];



    public function current()
    {
        return  $this->belongsTo('App\Team','team_id','id');
    }
    public function former()
    {
        return  $this->belongsTo('App\Team','former_club','id');
    }
    public function scorer()
    {
        return  $this->hasMany('App\Scorer');
    }
}
