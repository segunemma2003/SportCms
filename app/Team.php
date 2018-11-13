<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $guarded=['id'];



    public function home(){
        return $this->hasMany('App\Fixtures','home');
    }
    public function away(){
        return $this->hasMany('App\Fixtures','away');
    }
    public function former()
    {
        return  $this->hasMany('App\Player','former_club');
    }
    public function current()
    {
        return  $this->hasMany('App\Player', 'team_id');
    }
}
