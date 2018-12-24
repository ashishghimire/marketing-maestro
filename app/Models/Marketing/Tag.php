<?php

namespace App\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];
    

    public  function posts()
    {
    	return $this->belongsToMany('App\Models\Marketing\Post');
    }

    // public function getRouteKeyName()
    // {
    // 	return 'name';
    // }


    public function advertising()
    {
    	return $this->belongsTo('App\Models\Marketing\Advertising');
    }

}
