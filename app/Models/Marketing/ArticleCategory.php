<?php

namespace App\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
        protected $guarded = [];


        // public function gerRoutekeyname()
        // {
        // 	return 'name';
        // }

        public function article()
    {
    	return $this->hasMany('App\Models\Marketing\Article','id');
    }
    
}
