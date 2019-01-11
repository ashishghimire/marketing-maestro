<?php

namespace App\Http\Controllers\Frontend;

use Analytics;
use function foo\func;
use Spatie\Analytics\Period;

use App\Models\Marketing\Cms;

use App\Http\Controllers\Controller;

use App\Models\Marketing\AdvertisingCategory;
use App\Models\Marketing\Advertising;
use App\Models\Marketing\OtherResourceCategory;
use App\Models\Marketing\OtherResource;
use App\Models\Marketing\Interview;
use App\Models\Marketing\InterviewCategory;
use App\Models\Marketing\ArticleCategory;
use App\Models\Marketing\Article;
use App\Models\Marketing\Slider;
use App\Models\Marketing\Tag;
use App\Models\Marketing\CaseStudy;
use App\Models\Marketing\CaseStudyCategory;
use DB;


use Carbon\Carbon;


class FrontendController extends Controller
{
    public $advertisingcategory;
    public $resourcecategory;
    public $resource;
    /**
     * @var Advertising
     */
    private $advertising;
    /**
     * @var CaseStudy
     */
    private $caseStudy;
    /**
     * @var Interview
     */
    private $interview;
    private $otherresource;


    public function __construct(Advertising $advertising, CaseStudy $caseStudy, Interview $interview, AdvertisingCategory $advertisingcategory, OtherResourceCategory $resourcecategory, OtherResource $otherresource)
    {

        $this->advertisingcategory = $advertisingcategory;
        $this->resourcecategory = $resourcecategory;
        $this->otherresource = $otherresource;
        $this->advertising = $advertising;
        $this->caseStudy = $caseStudy;
        $this->interview = $interview;


        // $this->_data['our_partners'] = OurPatner::where('status', 1)->orderBy('created_at', 'desc')->get();
        //  $this->_data['footer_links_spot_1'] = FooterLink::where('status', 1)->where('spot', 1)->orderBy('created_at', 'desc')->get();
        // // $this->_data['footer_links_spot_2'] = FooterLink::where('status', 1)->where('spot', 2)->orderBy('created_at', 'desc')->get();
        //  $this->_data['footer_cms'] = FooterCms::firstOrFail();
        //  $header_social_media = SocialMedia::all()->keyBy('id');
        //  $this->_data['header_social_media_facebook'] = $header_social_media[1];
        //  $this->_data['header_social_media_twitter'] = $header_social_media[2];
        //  $this->_data['header_social_media_google'] = $header_social_media[3];
        //  $this->_data['header_social_media_pinterest'] = $header_social_media[4];
        //  $this->_data['header_social_media_instagram'] = $header_social_media[5];
        //  $this->_data['header_social_media_youtube'] = $header_social_media[6];
        //  view()->share($this->_data);

    }


    public function index()
    {

        $advertisingfeaturepost = [];
        $advertisingweekly = [];
        $advertisingmonthly = [];
        $article = [];
        $recentnews = [];
        $advertisingpopular = [];
        $advertisingpopular1 = [];
        $articlepopular = [];
        $articlepopular1 = [];
        $latestarticle1 = [];
        $latestarticle = [];
        $latestadvertising = [];
        $latestadvertising1 = [];
        $adcat = [];
        $nepali = [];
        $indian = [];
        $english = [];
        $resource_cats = [];
        $books = [];
        $movies = [];
        $resource_popular = [];
        $allcasestudy = [];
        $featured_post_casestudy = [];
        $casestudy_popular = [];
        $allinterview_section = [];
        $featured_post_interview = [];
        $interview_popular = [];
        $nepali_featured = [];
        $indian_featured = [];
        $english_featured = [];
        $books_featured = [];
        $movies_featured = [];
        $nepali_featured = [];

        $adcat = AdvertisingCategory::all();

        $sliderContent = $this->getLatestContent();

        foreach ($adcat as $nix) {
            if ($nix->title == 'Nepali') {
                $nepali = Advertising::where('advertising_category_id', $nix->id)->where('featured', 0)->orderBy('order')->get();
                // dd($nepali);
                $nepali_featured = Advertising::where('advertising_category_id', $nix->id)->where('featured', 1)->first();
                // $nepali=Advertising::where('advertising_category_id',$nix->id)->where('featured',1)->get();
            }


            if ($nix->title == 'Indian') {
                $indian = Advertising::where('advertising_category_id', $nix->id)->where('featured', 0)->orderBy('order')->get();
                $indian_featured = Advertising::where('advertising_category_id', $nix->id)->where('featured', 1)->first();
            }


            if ($nix->title == 'English') {
                $english = Advertising::where('advertising_category_id', $nix->id)->where('featured', 0)->orderBy('order')->get();
                $english_featured = Advertising::where('advertising_category_id', $nix->id)->where('featured', 1)->first();
                // dd($english_featured);
                // dd($english_featured);
            }


        }


        //latest advertsing popular
        $advertisingpopular = Advertising::where('featured', 0)->latest()->take(3)->get();
        //endlatest adverting

        $resource_cats = OtherResourceCategory::all();

        foreach ($resource_cats as $resource_cat) {
            if ($resource_cat->title == 'Books') {

                $books = OtherResource::where('other_resource_category_id', $resource_cat->id)->where('featured', 0)->orderBy('order')->get();
                // dd($books);
                $books_featured = OtherResource::where('other_resource_category_id', $resource_cat->id)->where('featured', 1)->first();
                // dd($books_featured);

            }

            if ($resource_cat->title == 'Movies') {

                $movies = OtherResource::where('other_resource_category_id', $resource_cat->id)->where('featured', 0)->orderBy('order')->get();

                $movies_featured = OtherResource::where('other_resource_category_id', $resource_cat->id)->where('featured', 1)->first();
                // dd($movies_featured);


            }


        }

        $resource_popular = OtherResource::where('featured', 0)->latest()->take(3)->get();
        // dd($resource_popular);


        /******Casestudy*******/
        $allcasestudy = CaseStudy::where('featured', 0)->orderBy('order')->take(6)->get();
        // dd($allcasestudy);
        $featured_post_casestudy = CaseStudy::where('featured', 1)->first();
        $casestudy_popular = CaseStudy::where('featured', 0)->latest()->take(3)->get();

        /*******End Casestudy****/


        $allinterview_section = Interview::where('featured', 0)->orderBy('order')->take(6)->get();
        $featured_post_interview = Interview::where('featured', 1)->first();
        $interview_popular = Interview::where('featured', 0)->latest()->take(3)->get();


// $nepali=Advertising::where('advertising_category_id',1)->where('featured',1)->get();


// $indian=Advertising::where('advertising_category_id',2)->where('featured',1)->get();


        $advertisingfeaturepost = Advertising::where('featured', 1)->get();


        $latestarticle = Article::orderBy('created_at', 'desc')->limit('5')->get();
        $latestarticle1 = Article::latest()->first();


        //Featured Advertising
        $latestadvertising = Advertising::orderBy('created_at', 'desc')->limit('5')->get();
        $latestadvertising1 = Advertising::latest()->first();
        //end feature Advertising


        $advertisingpopular1 = Advertising::latest()->first();

        $articlepopular = Article::paginate(5);
        $articlepopular1 = Article::latest()->first();


        $article = Article::paginate(5);
        $recentnews = Article::latest()->take(5)->get();


        $advertisingweekly = Advertising::paginate(4);

        $advertisingmonthly = Advertising::all()->groupBy(function ($item) {
            return $item->created_at->format('d-M-y');
        });


        $slider = Slider::all();

        return view('frontend.marketing.index', compact('slider', 'advertisingfeaturepost', 'advertisingweekly', 'advertisingmonthly', 'article', 'recentnews', 'advertisingpopular', 'advertisingpopular1', 'articlepopular', 'articlepopular1', 'latestarticle1', 'latestarticle', 'latestadvertising', 'latestadvertising1', 'adcat', 'nepali', 'indian', 'english', 'resource_cats', 'books', 'movies', 'resource_popular', 'allcasestudy', 'featured_post_casestudy', 'casestudy_popular', 'allinterview_section', 'featured_post_interview', 'interview_popular', 'nepali_featured', 'indian_featured', 'english_featured', 'books_featured', 'movies_featured', 'sliderContent'));
    }




    // public function getPages($slug)
    //     {

    //     $getpages=Cms::where('url',$slug)->first();

    //     return view('frontend.marketing.pages.single',compact('getpages'));

    //   }


    public function advertising($slug)
    {

        $advertising = AdvertisingCategory::where('slug', $slug)->first();


        $get_ad_cat_id = $advertising->id;


        $peak = Advertising::where('advertising_category_id', $get_ad_cat_id)->paginate(4);


        // $getdata=$advertising->advertising_category_id->first();
        return view('frontend.marketing.gridlayouts', compact('peak'));

    }


    public function showadvertising($slug)
    {
        $data = Advertising::where('slug', $slug)->first();
        $advertising = Advertising::paginate(4);
        $blogad = Advertising::paginate(4);

        $recentad = Advertising::latest()->paginate(4);

        return view('frontend.marketing.singlegridlayouts', compact('data', 'advertising', 'blogad', 'recentad'));

    }


    public function getAdvertisingAll()
    {

        $alladvertising = Advertising::latest()->paginate(6);

        return view('frontend.marketing.advertising.allnavlayouts', compact('alladvertising'));


    }


    /*******************End-Advertising***************/

    public function resource($slug)
    {

        $resource = $this->resourcecategory->where('slug', $slug)->first();

        $get_ad_cat_id = $resource->id;


        $peak = $this->otherresource->where('other_resource_category_id', $get_ad_cat_id)->paginate(4);


        // $getdata=$advertising->advertising_category_id->first();
        return view('frontend.marketing.resource.gridlayouts', compact('peak'));

    }


    public function showresource($slug)
    {

        $data = $this->otherresource->where('slug', $slug)->first();
        // $otherresource=OtherResource::paginate(4);

        // $otherresourcead=OtherResource::paginate(4);
        // $recentad=OtherResource::latest()->paginate(4);

        return view('frontend.marketing.resource.singlegridlayouts', compact('data'));

    }


    public function getOtherResourceAll()
    {

        $allresource = OtherResource::latest()->paginate(6);


        return view('frontend.marketing.resource.allnavlayouts', compact('allresource'));


    }


    /**********Article****************/

    public function article($slug)
    {

        $article = ArticleCategory::where('slug', $slug)->first();
        $get_article_cat_id = $article->id;


        $peak = article::where('article_category_id', $get_article_cat_id)->paginate(4);
        // dd($peak);


        return view('frontend.marketing.article.gridlayouts', compact('peak'));


    }

    public function showarticle($slug)
    {
        $data = Article::where('slug', $slug)->first();
        $article = Article::paginate(4);

        $articlead = Article::paginate(4);
        $recentad = Article::latest()->paginate(4);

        return view('frontend.marketing.article.singlegridlayouts', compact('data', 'article', 'articlead', 'recentad'));


    }


    public function getArticleAll()
    {

        $allarticle = Article::latest()->paginate(6);


        return view('frontend.marketing.article.allnavlayouts', compact('allarticle'));


    }

    /*********End Article**************/


    /************Interview page **********/
    public function interview($slug)
    {

        $interview = InterviewCategory::where('slug', $slug)->first();
        $get_int_cat_id = $interview->id;

        $peak = Interview::where('interview_category_id', $get_int_cat_id)->paginate(4);

        return view('frontend.marketing.interview.gridlayouts', compact('peak'));


    }

    public function showinterview($slug)
    {
        $data = Interview::where('slug', $slug)->first();
        return view('frontend.marketing.interview.singlegridlayouts', compact('data'));


    }


    public function getinterviewAll()
    {

        $allinterview = Interview::where('featured', 0)->latest()->paginate(6);


        return view('frontend.marketing.interview.allnavlayouts', compact('allinterview'));


    }

    /**********End Interview page*************/


    /**********casestudy****************/

    public function casestudy($slug)
    {

        $casestudy = CaseStudyCategory::where('slug', $slug)->first();
        $get_casestudy_cat_id = $casestudy->id;


        $peak = CaseStudy::where('case_study_category_id', $get_casestudy_cat_id)->paginate(4);


        return view('frontend.marketing.casestudy.gridlayouts', compact('peak'));


    }

    public function showcasestudy($slug)
    {
        $data = CaseStudy::where('slug', $slug)->first();

        return view('frontend.marketing.casestudy.singlegridlayouts', compact('data'));


    }


    public function getcasestudyAll()
    {

        $allcasestudy = CaseStudy::where('featured', 0)->latest()->paginate(6);


        return view('frontend.marketing.casestudy.allnavlayouts', compact('allcasestudy'));


    }

    /*********endcasestudy**************/


    public function getTagPost(Tag $tag = null)
    {
        // return $tag->posts;
        $getSpecifpost = $tag->posts;


        // $data=Post::latest()->filter($request(['month','year']))->get();

        return view('frontend.marketing.showallpost', compact('getSpecifpost'));


    }

    private function getLatestContent()
    {
        $contentTypes = ['advertising', 'otherresource', 'caseStudy', 'interview']; //These should be same as the controller property
        $addressMap = [
            'advertising' => '/uploads/Advertising1/',
            'otherresource' => '/uploads/OtherResource/',
            'caseStudy' => '/uploads/CaseStudy/',
            'interview' => '/uploads/Interview/'
        ];

        $latestContent = array_map(function ($type) use ($addressMap) {
            $content = $this->{$type}->orderBy('created_at', 'desc')->first();
            // dd(empty($content));
            if (!empty($content)) {
                $content->filePath = $addressMap[$type];
                return $content;
            };
        }, $contentTypes);

        $latestContent = array_values(array_filter($latestContent, function($value){
            return isset($value);
        }));

        return $latestContent;
    }


}
