<?php

namespace App\Http\Controllers\Backend\Marketing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Marketing\SocialMedia;
use Session;    

class SocialMediaController extends Controller
{
   public $model;
        
        

        public function __construct(SocialMedia $model )
        {

            $this->model = $model;
           
            
        }


        public function index(SocialMedia $model)
        {

            $data = $this->model->paginate(4);


            return view('backend.SocialMedia.index' , compact('data'));

        }


        public function create()
        {

            return view('backend.SocialMedia.create');
        }


        public function store(Request $request)
        {


                 $this->validate($request,array(
                'name'=>'required',
                'website'=>'required',
                'link'=>'required',
                



            ));

            $this->model->create($request->all());
            return redirect()->back();

        }


        public function edit($id)
        {

            $model = $this->model->find($id);
            $data = $this->model->paginate(4);
            

            return view('backend.SocialMedia.index' , compact('data','model'));
        
        }

        public function update($id , Request $request)
        {


            $this->model->find($id)->update($request->all());
             return redirect('admin/socialmedia');
           
        }


        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }
        
             
      
}
