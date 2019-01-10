<?php

namespace App\Http\Controllers\Backend\Marketing;

use App\Services\FileService;
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
    /**
     * @var FileService
     */
    private $fileService;


    public function __construct(CaseStudy $model, CaseStudyCategory $casestudycategory, FileService $fileService)
    {

        $this->model = $model;
        $this->casestudycategory = $casestudycategory;


        $this->fileService = $fileService;
    }


    public function index(Casestudy $model)
    {


        $data = $this->model->paginate(4);
        $case_study_category_id = $this->casestudycategory->pluck('title', 'id');
        $casestudy_tag_id = Tag::where('type', 'casestudy')->get();


        return view('backend.CaseStudy.index', compact('data', 'case_study_category_id', 'casestudy_tag_id'));

    }


    public function create()
    {

        return view('backend.CaseStudy.create');
    }


    public function store(Request $request)
    {

        $slug = str_slug($request->title);
        $this->validate($request, array(

            'title' => 'required',
            'description' => 'required',
            'file' => 'required|mimes:jpg,jpeg,png,gif,svg,bmp',
            'coverpic' => 'required|mimes:jpg,jpeg,png,gif,svg,bmp',


        ));

        $data = [

            'title' => $request->title,
            'description' => $request->description,
            'featured' => $request->featured ? $request->featured : 0,
            'slug' => $slug,
            'order' => $request->order,

//                'file'      => $filename,

        ];

        if ($request->hasFile('file') || $request->hasFile('coverpic')) {

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $filename = $this->fileService->storeFile($file);
                $p = $file->move(base_path() . '/public/uploads/CaseStudy/', $filename);
                $data['file'] = $filename;
            }

            if ($request->hasFile('coverpic')) {
                $coverPic = $request->file('coverpic');
                $coverPicName = $this->fileService->storeFile($coverPic);
                $p = $coverPic->move(base_path() . '/public/uploads/CaseStudy/cover-pics', $coverPicName);
                $data['coverpic'] = $coverPicName;
            }

            $latest = $this->model->create($data);

        } else {

            $this->model->create($request->all());

        }


        Session::flash('flash_success', 'The CaseStudy  Has Been Created!.');
        Session::flash('flash_type', 'alert-warning');

        return redirect()->back();
    }

    public function edit($id)
    {

        $model = $this->model->find($id);
        $data = $this->model->paginate(4);
        $case_study_category_id = $this->casestudycategory->pluck('title', 'id');
        $casestudy_tag_id = Tag::where('type', 'casestudy')->get();


        return view('backend.CaseStudy.index', compact('data', 'model', 'case_study_category_id', 'casestudy_tag_id'));

    }

    public function update($id, Request $request)
    {
        $data = [

            'title' => $request->title,
            'description' => $request->description,
            'featured' => $request->featured ? $request->featured : 0,
        ];

        if ($request->hasFile('file') || $request->hasFile('coverpic')) {

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $filename = $this->fileService->storeFile($file);
                $p = $file->move(base_path() . '/public/uploads/CaseStudy/', $filename);
                $data['file'] = $filename;
            }

            if ($request->hasFile('coverpic')) {
                $coverPic = $request->file('coverpic');
                $coverPicName = $this->fileService->storeFile($coverPic);
                $p = $file->move(base_path() . '/public/uploads/CaseStudy/cover-pics', $coverPicName);
                $data['coverpic'] = $coverPicName;
            }

            $this->model->find($id)->update($data);
        } else {
            $this->model->find($id)->update($request->all());
        }


        Session::flash('flash_success', 'The Advertising  Has Been Updated!.');
        Session::flash('flash_type', 'alert-warning');
        return redirect('admin/casestudy');

    }


    public function delete($id)
    {

        $this->model->find($id)->delete();
        Session::flash('flash_warning', 'The Advertising  Has Been Deleted!.');
        Session::flash('flash_type', 'alert-warning');
        return redirect()->back();
    }


    public function casestudypost()
    {
        $casestudypost = $this->model->all();

        return view('backend.CaseStudy.featured.index', compact('casestudypost'));


    }

    public function featurepostcasestudy($id)
    {
        $data = $this->model->find($id);

        if ($data->featured == 1) {
            $data->featured = 0;
            $data->save();
        } else {
            $data->featured = 1;
            $data->save();
        }
        Session::flash('success', 'The post successfully updated');
        return Response::json();

    }

}
