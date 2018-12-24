<?php

namespace App\Http\Controllers\Backend\Marketing;

use Illuminate\Http\Request;
use App\Models\Marketing\ArticleCategory;
use Session;

use App\Http\Controllers\Controller;

class ArticleCategoryController extends Controller
{
    public $model;
        
        

        public function __construct(ArticleCategory $model )
        {

            $this->model = $model;
           
            
        }


        public function index(ArticleCategory $model)
        {

            $data = $this->model->paginate(4);


            return view('backend.ArticleCategory.index' , compact('data'));

        }


        public function create()
        {

            return view('backend.ArticleCategory.create');
        }


        public function store(Request $request)
        {
              $this->validate($request, array(


                'title'=>'required', 
            ));

            $slug =str_slug($request->title);

			$data = $request->all();
            
            
            $data = [
                'title' => $request->title ,
                'slug'=>$slug,   
                
                
                
                
                
            ];

            $this->model->create($data);
            Session::flash('flash_message' , 'The Article Category page is created!.');
            Session::flash('flash_type' , 'alert-success');

            return redirect()->back();
        }


        public function edit($id)
        {

            $model = $this->model->find($id);
            $data = $this->model->paginate(4);
            

            return view('backend.ArticleCategory.index' , compact('data','model'));
        
}

        public function update($id , Request $request)
        {
             
             $this->validate($request, array(


                'slug'=>'alpha_dash  | max: 255 | unique:article_categories,slug,' .$id,


            ));

           $this->model->find($id)->update($request->all());
      
        

             return redirect('admin/articlecategory');
           
        }


        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }
    
      
}
