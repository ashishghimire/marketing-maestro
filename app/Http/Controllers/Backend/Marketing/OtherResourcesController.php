<?php

namespace App\Http\Controllers\Backend\Marketing;

use App\Services\FileService;
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
    /**
     * @var FileService
     */
    private $fileService;


    public function __construct(OtherResource $model, OtherResourceCategory $otherresourcecategory, FileService $fileService )
        {

            $this->model = $model;
            $this->otherresourcecategory = $otherresourcecategory;


            $this->fileService = $fileService;
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
                'coverpic'=>'required|mimes:jpg,jpeg,png,gif,svg,bmp',

           ));

            $data = [

                'title' => $request->title,
                'description' => $request->description,
                'featured' => $request->featured ? $request->featured : 0,
                'slug' => $request->slug,
//                'file'  => $filename,
                'order'=>$request->order,
                'other_resource_category_id'=>$request->other_resource_category_id,
                'slug'=>$slug,
            ];

            if ($request->hasFile('file') || $request->hasFile('coverpic'))
         {

             if ($request->hasFile('file')) {
                 $file = $request->file('file');
                 $filename = $this->fileService->storeFile($file);
                 $p = $file->move(base_path() . '/public/uploads/OtherResource/', $filename);
                 $data['file'] = $filename;
             }

             if ($request->hasFile('coverpic')) {
                 $coverPic = $request->file('coverpic');
                 $coverPicName = $this->fileService->storeFile($coverPic);
                 $p = $coverPic->move(base_path() . '/public/uploads/OtherResource/cover-pics', $coverPicName);
                 $data['coverpic'] = $coverPicName;
             }
            
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


            $data = [


                'title' => $request->title,
                'description' => $request->description,
                'featured' => $request->featured,
//                'file'      => $filename,
                'other_resource_category_id'=>$request->other_resource_category_id,


            ];

            if ($request->hasFile('file') || $request->hasFile('coverpic')) {

                if ($request->hasFile('file')) {
                    $file = $request->file('file');
                    $filename = $this->fileService->storeFile($file);
                    $p = $file->move(base_path() . '/public/uploads/OtherResource', $filename);
                    $data['file'] = $filename;
                }

                if ($request->hasFile('coverpic')) {
                    $coverPic = $request->file('coverpic');
                    $coverPicName = $this->fileService->storeFile($coverPic);
                    $p = $file->move(base_path() . '/public/uploads/OtherResource/cover-pics', $coverPicName);
                    $data['coverpic'] = $coverPicName;
                }

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
