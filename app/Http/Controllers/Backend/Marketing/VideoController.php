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
use App\Models\Marketing\Video;


use App\Http\Controllers\Controller;
use Response;;

class VideoController extends Controller
{
    public $model;

        
        public function __construct(Video $model)
        {

            $this->model = $model;

           
        }

        public function index(Video $model)
        {

            $data = $this->model->paginate(4);


            return view('backend.Video.index' , compact('data'));

        }


        public function create()
        {

            return view('backend.Video.create');
        }


        public function getVideoAjaxCategory()
        {
            $type=Input::get('type');

            switch ($type) {

            case "advertisment":
            $subcategories=AdvertisingCategory::all();
                break;

            case "article":
            $subcategories=ArticleCategory::all();
                break;

            case "interview":
            $subcategories=InterviewCategory::all();

              break;

             case "other_resources":
            $subcategories=OtherResourceCategory::all();
               break;

              case "casestudy":
            $subcategories=CaseStudyCategory::all();
               
                break;

            default:
                echo "sorry";
            }

            return Response::json($subcategories);
            
            }


        
         
       
    
}
