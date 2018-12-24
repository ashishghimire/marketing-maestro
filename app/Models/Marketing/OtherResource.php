<?php

namespace App\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

class OtherResource extends Model
{
        protected $guarded = [];


          public function resourcecategory()
    {
    	return $this->belongsTo('App\Models\Marketing\OtherResourceCategory','other_resource_category_id');
    }
    
}
