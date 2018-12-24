<?php

namespace App\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

class Advertising extends Model
{
        protected $guarded = [];



    public function advertisingcategory()
    {
    	return $this->belongsTo('App\Models\Marketing\AdvertisingCategory','advertising_category_id');
    }

    public function tags()
    {
    	return $this->hasMany('App\Models\Marketing\Tag','id');
    }

	// public function getFileAttribute($file)
	// {
	// 	return asset('public/uploads/Advertising1').'/'.$file;
	//     // {{url('public/uploads/Advertising1/'.$field->file)}}" style="width:150px; height:150px;
	// }
    
}
