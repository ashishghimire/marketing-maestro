<?php

namespace App\Http\Controllers\Backend\Marketing;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Models\Marketing\Featured;
use App\Models\Marketing\Article;
use App\Models\Marketing\ArticleCategory;
use App\Models\Marketing\AdvertisingCategory;
use App\Models\Marketing\Advertising;
use App\Models\Marketing\InterviewCategory;
use App\Models\Marketing\Interview;
use App\Models\Marketing\OtherResourceCategory;
use App\Models\Marketing\OtherResource;
use App\Models\Marketing\CaseStudyCategory;
use App\Models\Marketing\CaseStudy;


use App\Http\Controllers\Controller;
use Response;

class FeaturedController extends Controller
{

    public function  __construct()
    {

    }

    public function index()
    {
    	 $data=Featured::all();
    	return view('backend.Featured.index',compact('data'));
    }


      public function create()
    {

    	
    	return view('backend.Featured.create');
    }



}
