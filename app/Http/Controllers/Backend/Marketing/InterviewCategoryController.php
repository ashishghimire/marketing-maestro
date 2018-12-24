<?php

namespace App\Http\Controllers\Backend\Marketing;

use Illuminate\Http\Request;
use App\Models\Marketing\InterviewCategory;
use Session;
use App\Http\Controllers\Controller;

class InterviewCategoryController extends Controller
{
    public $model;
        
        

        public function __construct(InterviewCategory $model )
        {

            $this->model = $model;
           
            
        }


        public function index(InterviewCategory $model)
        {

            $data = $this->model->paginate(4);


            return view('backend.InterviewCategory.index' , compact('data'));

        }


        public function create()
        {

            return view('backend.InterviewCategory.create');
        }


        public function store(Request $request)
        {


			$data = $request->all();
            
            
            $data = [
                'title' => $request->title ,
                'slug' => $request->slug ,
                
                
                
                
            ];

            $this->model->create($data);
            Session::flash('flash_message' , 'The Interview Category page is created!.');
            Session::flash('flash_type' , 'alert-success');

            return redirect()->back();
        }


        public function edit($id)
        {

            $model = $this->model->find($id);
            $data = $this->model->paginate(4);
            

            return view('backend.InterviewCategory.index' , compact('data','model'));
        
}

        public function update($id , Request $request)
        {
             

           $this->model->find($id)->update($request->all());
      
        

             return redirect('admin/interviewcategory');
           
        }


        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }
}
