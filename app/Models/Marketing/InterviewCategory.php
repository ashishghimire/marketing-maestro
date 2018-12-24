<?php

namespace App\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

class InterviewCategory extends Model
{
        protected $guarded = [];
    
    public function interview()
    {
    	return $this->hasMany('App\Models\Marketing\Interview','id');
    }
}
