<?php

namespace App\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

class CaseStudyCategory extends Model
{
        protected $guarded = [];

        public function casestudy()
    {
    	return $this->hasMany('App\Models\Marketing\CaseStudy','id');
    }
    
}
