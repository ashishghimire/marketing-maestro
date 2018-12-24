<?php

namespace App\Http\Controllers\Backend\Marketing;

use Illuminate\Http\Request;
use App\Models\Marketing\OtherResourceCategory;
use Session;
use App\Http\Controllers\Controller;

class OtherResourcesCategoryController extends Controller
{
     public $model;
        
        

        public function __construct(OtherResourceCategory $model )
        {

            $this->model = $model;
           
            
        }


        public function index(OtherResourceCategory $model)
        {

            $data = $this->model->paginate(4);


            return view('backend.OtherResourceCategory.index' , compact('data'));

        }


        public function create()
        {

            return view('backend.OtherResourceCategory.create');
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
            Session::flash('flash_message' , 'The Otherresource Category page is created!.');
            Session::flash('flash_type' , 'alert-success');

            return redirect()->back();
        }


        public function edit($id)
        {

            $model = $this->model->find($id);
            $data = $this->model->paginate(4);
            

            return view('backend.OtherResourceCategory.index' , compact('data','model'));
        
}

        public function update($id , Request $request)
        {
              
             $this->validate($request, array(


               


            ));

           $this->model->find($id)->update($request->all());
      
        

             return redirect('admin/otherresourcecategory');
           
        }


        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }
}
