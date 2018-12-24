<?php

namespace App\Http\Controllers\Backend\Marketing;

use Illuminate\Http\Request;
use App\Models\Marketing\Tag;
use App\Http\Controllers\Controller;
use Session;

class TagController extends Controller
{
    public $model;
        
        

        public function __construct(Tag $model )
        {

            $this->model = $model;
           
            
        }


        public function index(Tag $model)
        {

            $data = $this->model->paginate(4);


            return view('backend.Tag.index' , compact('data'));

        }


        public function create()
        {

            return view('backend.Tag.create');
        }


        public function store(Request $request)
        {
            $this->validate($request, array(


                'name'=>'required', 
                'type'=>'required',
            ));



			$data = $request->all();
            
            
            $data = [
                'name' => $request->name ,
                'type'=>$request->type,
                
                
                
                
            ];

            $this->model->create($data);
            Session::flash('flash_message' , 'The  Tag page is created!.');
            Session::flash('flash_type' , 'alert-success');

            return redirect()->back();
        }


        public function edit($id)
        {

            $model = $this->model->find($id);
            $data = $this->model->paginate(4);
            

            return view('backend.Tag.index' , compact('data','model'));
        
}

        public function update($id , Request $request)
        {
             
            

           $this->model->find($id)->update($request->all());
      
        

             return redirect('admin/tag');
           
        }


        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }
    
}
