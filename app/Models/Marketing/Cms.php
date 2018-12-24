<?php

namespace App\Models\Marketing;

use Illuminate\Database\Eloquent\Model;

class Cms extends Model
{
    protected $guarded=[];


    public function parent() {
		return $this->belongsTo('App\Models\Marketing\Cms', 'parent_id');
	}

	public function child() {
		return $this->hasMany('App\Models\Marketing\Cms', 'parent_id');
	}
}
