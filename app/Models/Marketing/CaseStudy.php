<?php

namespace App\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
        protected $guarded = [];

        public function casestudycategory()
    {
    	return $this->belongsTo('App\Models\Marketing\CaseStudyCategory','case_study_category_id');
    }

    
}
