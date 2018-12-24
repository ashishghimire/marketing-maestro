<?php

namespace App\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
        protected $guarded = [];


        public function interviewcategory()
    {
    	return $this->belongsTo('App\Models\Marketing\InterviewCategory','interview_category_id');
    }
    
}
