<?php

namespace App\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded=[];


    public  function tags()
    {
    	return $this->belongsToMany('App\Models\Marketing\Tag');
    }
}
