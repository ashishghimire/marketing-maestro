<?php

namespace App\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
        protected $guarded = [];


 //       public function delete_image() {
	// 	if(is_file('public/uploads/Article/'. $this->image)) {
	// 		unlink('public/uploads/Article/'. $this->image);
	// 	}
	// }

        public function articlecategory()
    {
    	return $this->belongsTo('App\Models\Marketing\ArticleCategory','article_category_id');
    }
    
}
