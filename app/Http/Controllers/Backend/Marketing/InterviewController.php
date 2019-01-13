<?php

namespace App\Http\Controllers\Backend\Marketing;

use App\Services\FileService;
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
    /**
     * @var FileService
     */
    private $fileService;


    public function __construct(Interview $model, InterviewCategory $interviewcategory, FileService $fileService )
        {

            $this->model = $model;
            $this->interviewcategory = $interviewcategory;


            $this->fileService = $fileService;
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
            $data = [

                'title' => $request->title,
                'description' => $request->description,
                'featured' => $request->featured ? $request->featured : 0,
                'slug'=>$slug,
                'order'=>$request->order,
            ];

            if ($request->hasFile('file') || $request->hasFile('coverpic'))
            {

                if ($request->hasFile('file')) {
                    $file = $request->file('file');
                    $filename = $this->fileService->storeFile($file);
                    $p = $file->move(base_path() . '/public/uploads/Interview/', $filename);
                    $data['file'] = $filename;
                }

                if ($request->hasFile('coverpic')) {
                    $coverPic = $request->file('coverpic');
                    $coverPicName = $this->fileService->storeFile($coverPic);
                    $p = $coverPic->move(base_path() . '/public/uploads/Interview/cover-pics', $coverPicName);
                    $data['coverpic'] = $coverPicName;
                }

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
            $data = [


                'title' => $request->title,
                'description' => $request->description,
                'featured' => $request->featured ? $request->featured : 0,
                'order'=>$request->order,
//                'file'      => $filename,
            ];

            if ($request->hasFile('file') || $request->hasFile('coverpic')) {

                if ($request->hasFile('file')) {
                    $file = $request->file('file');
                    $filename = $this->fileService->storeFile($file);
                    $p = $file->move(base_path() . '/public/uploads/Interview', $filename);
                    $data['file'] = $filename;
                }

                if ($request->hasFile('coverpic')) {
                    $coverPic = $request->file('coverpic');
                    $coverPicName = $this->fileService->storeFile($coverPic);
                    $p = $file->move(base_path() . '/public/uploads/Interview/cover-pics', $coverPicName);
                    $data['coverpic'] = $coverPicName;
                }

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
