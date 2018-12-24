<?php

namespace App\Http\Controllers\Backend\Marketing;

use Illuminate\Http\Request;
use App\Models\Marketing\CaseStudyCategory;
use Session;
use App\Http\Controllers\Controller;

class CaseStudyCategoryController extends Controller
{
   public $model;
        
        

        public function __construct(CaseStudyCategory $model )
        {

            $this->model = $model;
           
            
        }


        public function index(CaseStudyCategory $model)
        {

            $data = $this->model->paginate(4);


            return view('backend.CaseStudyCategory.index' , compact('data'));

        }


        public function create()
        {

            return view('backend.CaseStudyCategory.create');
        }


        public function store(Request $request)
        {


			$data = $request->all();
            
            
            $data = [
                'title' => $request->title ,
                'slug' => $request->slug ,
                
                
                
                
            ];

            $this->model->create($data);
            Session::flash('flash_message' , 'The CaseStudyCategory  page is created!.');
            Session::flash('flash_type' , 'alert-success');

            return redirect()->back();
        }


        public function edit($id)
        {

            $model = $this->model->find($id);
            $data = $this->model->paginate(4);
            

            return view('backend.CaseStudyCategory.index' , compact('data','model'));
        
}

        public function update($id , Request $request)
        {
             

           $this->model->find($id)->update($request->all());
      
        
			Session::flash('flash_message' , 'The CaseStudyCategory  page is update!.');
            Session::flash('flash_type' , 'alert-success');

             return redirect('admin/casestudycategory');
           
        }


        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }
}
