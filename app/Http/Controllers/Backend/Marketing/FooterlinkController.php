<?php

namespace App\Http\Controllers\Backend\Marketing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Marketing\FooterLink;


class FooterlinkController extends Controller
{
    public $model;
        
        

        public function __construct(FooterLink $model )
        {

            $this->model = $model;
           
            
        }


        public function index(FooterLink $model)
        {

            $data = $this->model->paginate(4);


            return view('backend.FooterLink.index' , compact('data'));

        }


        public function create()
        {

            return view('backend.FooterLink.create');
        }


        public function store(Request $request)
        {


                 $this->validate($request,array(
                'name'=>'required',
                'status'=>'required',
                'link'=>'required',
                



            ));

            $this->model->create($request->all());
            return redirect()->back();

        }


        public function edit($id)
        {

            $model = $this->model->find($id);
            $data = $this->model->paginate(4);
            

            return view('backend.FooterLink.index' , compact('data','model'));
        
        }

        public function update($id , Request $request)
        {


            $this->model->find($id)->update($request->all());
             return redirect('admin/footerlink');
           
        }


        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }
        
}
