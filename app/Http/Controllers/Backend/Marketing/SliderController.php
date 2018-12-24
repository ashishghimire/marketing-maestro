<?php

namespace App\Http\Controllers\Backend\Marketing;

use Illuminate\Http\Request;
use App\Models\Marketing\Slider;

use App\Http\Controllers\Controller;

class SliderController extends Controller
{
     public $model;

        
        public function __construct(Slider $model)
        {

            $this->model = $model;

           
        }




        public function index(Slider $model)
        {

            $data = $this->model->paginate(4);


            return view('backend.Slider.index' , compact('data'));

        }


        public function create()
        {

            return view('backend.Slider.create');
        }



        public function store(Request $request)
        {
        	
           


                if ($request->hasFile('file')) 
         {
            $file = $request->file('file');
            $originalName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $size = $file->getClientSize();
            $originalNameWithoutExt = substr($originalName , 0 , strlen($originalName) - strlen($extension) - 1);
            $number = mt_rand(10000 , 99999);
            $filename = $originalNameWithoutExt . '-' . $number .  "." .$extension;
            $file = $request->file('file');
            $p = $file->move(
                base_path() . '/public/uploads/Slider' , $filename
            );
            
            }
            
            $data = [
                
               'title' => $request->title,
               'description' => $request->description,
               'order' => $request->order,
                'file'      => $filename ,

                
                
            ];


            $latest=$this->model->create($data);

            return redirect()->back();
        }


        public function edit($id)
        {

            $model = $this->model->find($id);

            $data = $this->model->paginate(4);


            
            return view('backend.Slider.index' , compact('data','model'));
        
		}

        public function update($id , Request $request)
        {

              if ($request->hasFile('file')) 
         {
            
        
            $photo = $request->file('file');
            $originalName = $photo->getClientOriginalName();
            $extension = $photo->getClientOriginalExtension();
            $size = $photo->getClientSize();
            $originalNameWithoutExt = substr($originalName , 0 , strlen($originalName) - strlen($extension) - 1);
            $number = mt_rand(10000 , 99999);
            $filename = $originalNameWithoutExt . '-' . $number . '-' . $extension;
            $photo = $request->file('file');

            $p = $photo->move(
                base_path() . '/public/uploads/Slider' , $filename
            );


            $data = [
                
                 'title' => $request->title,
               'description' => $request->description,
               'order' => $request->order,
                'file'      => $filename ,

           
            ];
            $this->model->find($id)->update($data);

            }
                else{
            $this->model->find($id)->update($request->all());
            
             }
             return redirect('admin/slider');
           
        }

        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }
}
