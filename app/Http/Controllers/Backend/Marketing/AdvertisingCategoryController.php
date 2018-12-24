<?php

namespace App\Http\Controllers\Backend\Marketing;

use Illuminate\Http\Request;
use App\Models\Marketing\AdvertisingCategory;
use App\Http\Controllers\Controller;
use Session;	
class AdvertisingCategoryController extends Controller
{
    public $model;
        
        

        public function __construct(AdvertisingCategory $model )
        {

            $this->model = $model;
           
            
        }


        public function index(AdvertisingCategory $model)
        {

            $data = $this->model->paginate(4);


            return view('backend.AdvertisingCategory.index' , compact('data'));

        }


        public function create()
        {

            return view('backend.AdvertisingCategory.create');
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
            Session::flash('flash_message' , 'The Advertising Category page is created!.');
            Session::flash('flash_type' , 'alert-success');

            return redirect()->back();
        }


        public function edit($id)
        {

            $model = $this->model->find($id);
            $data = $this->model->paginate(4);
            

            return view('backend.AdvertisingCategory.index' , compact('data','model'));
        
}

        public function update($id , Request $request)
        {
             
            
           $this->model->find($id)->update($request->all());
      
        

             return redirect('admin/advertisingcategory');
           
        }


        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }
    
      
}
