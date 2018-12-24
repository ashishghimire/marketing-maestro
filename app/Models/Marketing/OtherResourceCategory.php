<?php

namespace App\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

class OtherResourceCategory extends Model
{
        protected $guarded = [];

         public function otherresource()
    {
    	return $this->hasMany('App\Models\Marketing\OtherResource','id');
    }
    
}
