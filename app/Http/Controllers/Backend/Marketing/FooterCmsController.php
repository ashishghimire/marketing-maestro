<?php

namespace App\Http\Controllers\Backend\Marketing;
	

use Illuminate\Http\Request;
use App\Models\Marketing\FooterCms;
use App\Http\Controllers\Controller;

class FooterCmsController extends Controller
{
    public $model;
        
        

        public function __construct(FooterCms $model )
        {

            $this->model = $model;
           
            
        }


        public function index(FooterCms $model)
        {

            $data = $this->model->paginate(4);


            return view('backend.FooterCms.index' , compact('data'));

        }


        public function create()
        {

            return view('backend.FooterCms.create');
        }


        public function store(Request $request)
        {


                 $this->validate($request,array(
                'about_us_title'=>'required',
                'about_us_details'=>'required',
                'contact_title'=>'required',
                'phone'=>'required',
                'email'=>'required',
                



            ));

            $this->model->create($request->all());
            return redirect()->back();

        }


        public function edit($id)
        {

            $model = $this->model->find($id);
            $data = $this->model->paginate(4);
            

            return view('backend.FooterCms.index' , compact('data','model'));
        
        }

        public function update($id , Request $request)
        {


            $this->model->find($id)->update($request->all());
             return redirect('admin/FooterCms');
           
        }


        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }
        
}
