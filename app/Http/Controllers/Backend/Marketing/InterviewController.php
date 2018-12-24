<?php

namespace App\Http\Controllers\Backend\Marketing;

use Illuminate\Http\Request;
use App\Models\Marketing\Interview;
use App\Models\Marketing\InterviewCategory;
use App\Models\Marketing\Tag;
use App\Http\Controllers\Controller;
use Response;
use Session;


class InterviewController extends Controller
{
     public $model;
   public $interviewcategory;
        
        

        public function __construct(Interview $model, InterviewCategory $interviewcategory )
        {

            $this->model = $model;
            $this->interviewcategory = $interviewcategory;
           
            
        }


        public function index(Interview $model)
        {


            $data = $this->model->paginate(4);

            $interview_category_id= $this->interviewcategory->pluck('title','id');
            $interview_tag_id=Tag::where('type','interview')->get();



           
            


            return view('backend.Interview.index' , compact('data','interview_category_id','interview_tag_id'));

        }


        public function create()
        {

            return view('backend.Interview.create');
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
            $p = $file-> move( base_path() . '/public/uploads/Interview/' , $filename );
           
            $data = [
                
                'title' => $request->title,
                'description' => $request->description,
                'featured' => $request->featured ? $request->featured : 0,
                 'slug'=>$slug,
                 'order'=>$request->order,
                'file'      => $filename,
                
                
            ];

          
            $latest=$this->model->create($data);
            }

             else{

            $this->model->create($request->all());


        }



         Session::flash('flash_success' , 'The Advertising  Has Been Created');
            Session::flash('flash_type' , 'alert-warning');
      
        return redirect()->back();



        }


        public function edit($id)
        {

            $model = $this->model->find($id);
            $data = $this->model->paginate(4);
            $interview_category_id= $this->interviewcategory->pluck('title','id');
            $interview_tag_id=Tag::where('type','interview')->get();

            

            return view('backend.Interview.index' , compact('data','model','interview_category_id','interview_tag_id'));
        
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
                base_path() . '/public/uploads/Interview/' , $filename
            );
            
           $data = [
                
                 
               'title' => $request->title,
                'description' => $request->description,
                'featured' => $request->featured ? $request->featured : 0,
                'order'=>$requesr->order,
                'file'      => $filename,
                
                 

                
            ];

          $this->model->find($id)->update($data);
      }
      else
      {
        

           $this->model->find($id)->update($request->all());
        }
        
         Session::flash('flash_success' , 'The Advertising  Has Been Updated!.');
            Session::flash('flash_type' , 'alert-warning');

             return redirect('admin/interview');
           
        }


        public function delete($id)
        {

            $this->model->find($id)->delete();
             Session::flash('flash_danger' , 'The Interview  Has Been Deleted!.');
            Session::flash('flash_type' , 'alert-warning');
             return redirect()->back();
        }


        public function interviewpost()
        {
        
        
        $interviewpost=$this->model->paginate(4);
         return view('backend.Interview.featured.index',compact('interviewpost'));

        }

        public function featuredinterviewpost($id)
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
            return Response::json();
        }
        
    
       
}
