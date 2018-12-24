<?php

namespace App\Http\Controllers\Backend\Marketing;

use Illuminate\Http\Request;
use App\Models\Marketing\OtherResource;
use App\Models\Marketing\OtherResourceCategory;
use App\Http\Controllers\Controller;
use Session;
use Response;

class OtherResourcesController extends Controller
{
    public $model;
   public $otherresourcecategory;
        
        

        public function __construct(OtherResource $model, OtherResourceCategory $otherresourcecategory )
        {

            $this->model = $model;
            $this->otherresourcecategory = $otherresourcecategory;
           
            
        }


        public function index(OtherResource $model)
        {


            $data = $this->model->paginate(4);

            $other_resource_category_id= $this->otherresourcecategory->pluck('title','id');
           
            


            return view('backend.OtherResource.index' , compact('data','other_resource_category_id'));

        }


        public function create()
        {

            return view('backend.OtherResource.create');
        }

     		



        public function store(Request $request)
        {

             $slug =str_slug($request->title);
            $this->validate($request,array(

                'title'=>'required',
                'description'=>'required',
                'file'=>'required|mimes:jpg,jpeg,png,gif,svg,bmp',


           ));

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
            $p = $file-> move( base_path() . '/public/uploads/OtherResource/' , $filename );
           
            $data = [
                
                'title' => $request->title,
                'description' => $request->description,
                'featured' => $request->featured ? $request->featured : 0,
                'slug' => $request->slug,
                'file'  => $filename,
                'order'=>$request->order,
                'other_resource_category_id'=>$request->other_resource_category_id,
                'slug'=>$slug,   
            ];
            
            $latest=$this->model->create($data);
            }

             else{

            $this->model->create($request->all());


        }



          Session::flash('flash_success' , 'The OtherResources  Has Been Created!.');
            Session::flash('flash_type' , 'alert-warning');
      
       
            return redirect()->back();
        }


        public function edit($id)
        {

            $model = $this->model->find($id);
            
            $data = $this->model->paginate(4);
            $other_resource_category_id= $this->otherresourcecategory->pluck('title','id');
            

            return view('backend.OtherResource.index' , compact('data','model','other_resource_category_id'));
        
}

        public function update($id , Request $request)
        {
              
     
              if($request->hasFile('file'))
            
            {

            $file = $request->file('file');
            

           $originalName = $file->getClientOriginalName();

            $extension = $file->getClientOriginalExtension();
            $size = $file->getClientSize();
            $originalNameWithoutExt = substr($originalName , 0 , strlen($originalName) - strlen($extension) - 1);
            
            $filename = $originalNameWithoutExt . '-'  . '-'  . "." . $extension;
            $file = $request->file('file');


           $p = $file->move(
                base_path() . '/public/uploads/OtherResource/' , $filename
            );
            
           $data = [
                
              
                'title' => $request->title,
                'description' => $request->description,
                'featured' => $request->featured,
                'file'      => $filename,
                'other_resource_category_id'=>$request->other_resource_category_id,

                
            ];

          $this->model->find($id)->update($data);
      }
      else
      {
        

           $this->model->find($id)->update($request->all());
        }
        
          Session::flash('flash_success' , 'The OtherResources  Has Been Updated!.');
            Session::flash('flash_type' , 'alert-warning');

             return redirect('admin/otherresource');
           
        }


        public function delete($id)
        {

            $this->model->find($id)->delete();
            
              Session::flash('flash_danger' , 'The OtherResources  Has Been Deleted!.');
            Session::flash('flash_type' , 'alert-warning');
             return redirect()->back();
        }


       

        public function otherpost()
        {
            $datas=OtherResourceCategory::all();

            $other_resource_post=OtherResource::all();
            // return "otherpost";

        return view('backend.OtherResource.featured.index',compact('datas','other_resource_post'));

        }



        public function featurepost_otherpost($id)
        {
            
            $data=$this->model->find($id);
            if($data->featured==1)
            {
                $data->featured=0;
                $data->save();
            }
            else
            {
                $data->featured=1;
                $data->save();
            }
            Session::flash('success','The post successfully updated');
            return Response::json($data);
        }


          
    
    
        
}
