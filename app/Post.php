<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $guarded=['id'];


    public function user()
    {
        return  $this->belongsTo('App\User');
    }
    public function comments()
    {
        return  $this->hasMany('App\Comment');
    }
    public function galleries()
    {
        return  $this->hasMany('App\Gallery');
    }
    public function category()
    {
        return  $this->belongsToMany('App\Allcategory','posts_allcategories')->withTimestamps();
    }
}
