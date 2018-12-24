<?php

namespace App\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

class AdvertisingCategory extends Model
{
        protected $guarded = [];



    public function advertisings()
    {
    	return $this->hasMany('App\Models\Marketing\Advertising','id');
    }
    
}
