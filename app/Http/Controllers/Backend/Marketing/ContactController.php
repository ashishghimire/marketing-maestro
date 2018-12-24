<?php

namespace App\Http\Controllers\Backend\Marketing;

use Illuminate\Http\Request;
use App\Models\Marketing\Contact;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
     public $model;
        
        

        public function __construct(Contact $model )
        {

            $this->model = $model;
           
            
        }


        public function index(Contact $model)
        {

            $data = $this->model->paginate(4);


            return view('backend.Contact.index' , compact('data'));

        }


        public function create()
        {

            return view('backend.Contact.create');
        }


        public function store(Request $request)
        {


                 $this->validate($request,array(
                'title'=>'required',
                'message'=>'required',
                'email'=>'required|email',



            ));

            $this->model->create($request->all());
            return redirect()->back();

        }


        public function edit($id)
        {

            $model = $this->model->find($id);
            $data = $this->model->paginate(4);
            

            return view('backend.Contact.index' , compact('data','model'));
        
}

        public function update($id , Request $request)
        {

                 $this->validate($request,array(
                'title'=>'required',
                'message'=>'required',
                'email'=>'required|email'
                )
                );

            $this->model->find($id)->update($request->all());
             return redirect('admin/contact');
           
        }


        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }
        
              public function contactapi() {

        $data = $this->model->paginate(8);
        return json_encode($data);
    }
}
