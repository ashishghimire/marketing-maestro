<?php

namespace App\Http\Controllers\Backend\Marketing;

use Illuminate\Http\Request;
use App\Models\Marketing\CaseStudy;
use App\Models\Marketing\CaseStudyCategory;
use App\Models\Marketing\Tag;
use App\Http\Controllers\Controller;
use Session;
use Response;
class CaseStudyController extends Controller
{
    public $model;
   public $casestudycategory;
        
        

        public function __construct(CaseStudy $model, CaseStudyCategory $casestudycategory )
        {

            $this->model = $model;
            $this->casestudycategory = $casestudycategory;
           
            
        }


        public function index(Casestudy $model)
        {


            $data = $this->model->paginate(4);
            $case_study_category_id  = $this->casestudycategory->pluck('title','id');
            $casestudy_tag_id=Tag::where('type','casestudy')->get();



            return view('backend.CaseStudy.index' , compact('data','case_study_category_id','casestudy_tag_id'));

        }


        public function create()
        {

            return view('backend.CaseStudy.create');
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

            $p = $file->move(base_path() . '/public/uploads/CaseStudy/' , $filename);
         
            $data = [
                
                'title' => $request->title,
                'description' => $request->description,
                'featured' => $request->featured ? $request->featured : 0,
                 'slug'=>$slug, 
                'order' => $request->order,

                'file'      => $filename,
                
            ];
           


            $latest=$this->model->create($data);
           
            }

             else{

            $this->model->create($request->all());

        }



          Session::flash('flash_success' , 'The CaseStudy  Has Been Created!.');
            Session::flash('flash_type' , 'alert-warning');
      
        return redirect()->back();
    }

        public function edit($id)
        {

            $model = $this->model->find($id);
            $data = $this->model->paginate(4);
            $case_study_category_id = $this->casestudycategory->pluck('title','id');
            $casestudy_tag_id=Tag::where('type','casestudy')->get();

            

            return view('backend.CaseStudy.index' , compact('data','model','case_study_category_id','casestudy_tag_id'));
        
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
                base_path() . '/public/uploads/CaseStudy/' , $filename
            );
            
           $data = [
                
               'title' => $request->title,
                'description' => $request->description,
                'featured' => $request->featured ? $request->featured : 0,
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
             return redirect('admin/casestudy');
           
        }


        public function delete($id)
        {

            $this->model->find($id)->delete();
              Session::flash('flash_warning' , 'The Advertising  Has Been Deleted!.');
            Session::flash('flash_type' , 'alert-warning');
             return redirect()->back();
        }



        public function casestudypost()
        {
            $casestudypost=$this->model->all();

            return view('backend.CaseStudy.featured.index',compact('casestudypost'));


        }

        public function featurepostcasestudy($id)
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
