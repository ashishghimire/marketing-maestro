<?php

namespace App\Http\Controllers\Backend\Marketing;

use Illuminate\Http\Request;
use App\Models\Marketing\Category;
use App\Http\Controllers\Controller;
use Session;

class CategoryController extends Controller
{
     public $model;
        
        

        public function __construct(Category $model )
        {

            $this->model = $model;
           
            
        }


        public function index(Category $model)
        {

            $data = $this->model->paginate(4);


            return view('backend.Category.index' , compact('data'));

        }


        public function create()
        {

            return view('backend.Category.create');
        }


        public function store(Request $request)
        {
            $this->validate($request, array(


                'title'=>'required', 
            ));



			$data = $request->all();
            
            
            $data = [
                'title' => $request->title ,
                
                
                
                
            ];

            $this->model->create($data);
            Session::flash('flash_message' , 'The  Category page is created!.');
            Session::flash('flash_type' , 'alert-success');

            return redirect()->back();
        }


        public function edit($id)
        {

            $model = $this->model->find($id);
            $data = $this->model->paginate(4);
            

            return view('backend.Category.index' , compact('data','model'));
        
}

        public function update($id , Request $request)
        {
             
            

           $this->model->find($id)->update($request->all());
      
        

             return redirect('admin/category');
           
        }


        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }
    
}
