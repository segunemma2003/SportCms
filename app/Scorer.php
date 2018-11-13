<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scorer extends Model
{
    //
    protected $guarded=['id'];


    public function player()
    {
        return  $this->belongsTo('App\Player');
    }
    public function fixture()
    {
        return  $this->belongsTo('App\Fixture');
    }

}
