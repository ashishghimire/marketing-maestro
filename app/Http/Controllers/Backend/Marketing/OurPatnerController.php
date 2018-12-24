<?php

namespace App\Http\Controllers\Backend\Marketing;

use Illuminate\Http\Request;
use App\Models\Marketing\OurPatner;
use App\Http\Controllers\Controller;
use Folklore\Image\Facades\Image;


class OurPatnerController extends Controller
{
    public $model;

        
        public function __construct(OurPatner $model)
        {

            $this->model = $model;

           
        }




        public function index(OurPatner $model)
        {

            $data = $this->model->paginate(4);


            return view('backend.OurPatner.index' , compact('data'));

        }


        public function create()
        {

            return view('backend.OurPatner.create');
        }



        public function store(Request $request)
        {
        	
           


                if ($request->hasFile('image')) 
         {
            $file = $request->file('image');
            $originalName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $size = $file->getClientSize();
            $originalNameWithoutExt = substr($originalName , 0 , strlen($originalName) - strlen($extension) - 1);
            $number = mt_rand(10000 , 99999);
            $filename = $originalNameWithoutExt . '-' . $number .  "." .$extension;
            $file = $request->file('image');
            $p = $file->move(
                base_path() . '/public/uploads/OurPatner' , $filename
            );

            Image::make(base_path() . '/public/uploads/OurPatner/' . $filename, array(
                'width' => 200,
                'height' => 250,
            ))->save(base_path() . '/public/uploads/OurPatner/thumbnail/' . $filename);
            
            }
            
            $data = [
                
               'name' => $request->name,
               'details' => $request->details,
               'status' => $request->status,
                'image'      => $filename ,

                
                
            ];


            $latest=$this->model->create($data);

            return redirect()->back();
        }


        public function edit($id)
        {

            $model = $this->model->find($id);

            $data = $this->model->paginate(4);


            
            return view('backend.OurPatner.index' , compact('data','model'));
        
		}

        public function update($id , Request $request)
        {

              if ($request->hasFile('image')) 
         {
            
        
            $photo = $request->file('image');
            $originalName = $photo->getClientOriginalName();
            $extension = $photo->getClientOriginalExtension();
            $size = $photo->getClientSize();
            $originalNameWithoutExt = substr($originalName , 0 , strlen($originalName) - strlen($extension) - 1);
            $number = mt_rand(10000 , 99999);
            $filename = $originalNameWithoutExt . '-' . $number . '-' . $extension;
            $photo = $request->file('image');

            $p = $photo->move(
                base_path() . '/public/uploads/OurPatner' , $filename
            );
            Image::make(base_path() . '/public/uploads/OurPatner/' . $filename, array(
                'width' => 200,
                'height' => 250,
            ))->save(base_path() . '/public/uploads/OurPatner/thumbnail/' . $filename);


            $data = [
                
                  'name' => $request->name,
               'details' => $request->details,
               'status' => $request->status,
                'image'      => $filename ,

                
           
            ];
            $this->model->find($id)->update($data);

            }
                else{
            $this->model->find($id)->update($request->all());
            
             }
             return redirect('admin/OurPatner');
           
        }

        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }
}
