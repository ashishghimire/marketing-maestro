<?php

namespace App\Http\Controllers\Backend\Marketing;

use App\Services\FileService;
use Illuminate\Http\Request;
use App\Models\Marketing\Advertising;
use App\Models\Marketing\AdvertisingCategory;
use App\Models\Marketing\Tag;
use App\Http\Controllers\Controller;
use Response;
use Session;

class AdvertisingController extends Controller
{
    public $model;
    public $advertisingcategory;
    /**
     * @var FileService
     */
    private $fileService;


    public function __construct(Advertising $model, AdvertisingCategory $advertisingcategory, FileService $fileService)
    {

        $this->model = $model;
        $this->advertisingcategory = $advertisingcategory;


        $this->fileService = $fileService;
    }


    public function index(Advertising $model)
    {

        $data = $this->model->paginate(4);


        $advertising_category_id = $this->advertisingcategory->pluck('title', 'id');
        $advertising_tag_id = Tag::where('type', 'advertisment')->get();


        return view('backend.advertisement.index', compact('data', 'advertising_category_id', 'advertising_tag_id'));

    }


    public function create()
    {

        return view('backend.Advertising.create');
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
            'slug' => $request->slug,
            'order' => $request->order,
            'advertising_category_id' => $request->advertising_category_id,
            'slug' => $slug,


        ];

        if ($request->hasFile('file') || $request->hasFile('coverpic')) {

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $filename = $this->fileService->storeFile($file);
                $p = $file->move(base_path() . '/public/uploads/Advertising1/', $filename);
                $data['file'] = $filename;
            }

            if ($request->hasFile('coverpic')) {
                $coverPic = $request->file('coverpic');
                $coverPicName = $this->fileService->storeFile($coverPic);
                $p = $coverPic->move(base_path() . '/public/uploads/Advertising1/cover-pics', $coverPicName);
                $data['coverpic'] = $coverPicName;
            }

            $latest = $this->model->create($data);
        } else {

            $this->model->create($request->all());


        }


        Session::flash('flash_success', 'The Advertising  Has Been Created!.');
        Session::flash('flash_type', 'alert-warning');


        return redirect()->back();
    }


    public function edit($id)
    {


        $model = $this->model->find($id);


        $data = $this->model->paginate(4);
        $advertising_category_id = $this->advertisingcategory->pluck('title', 'id');


        return view('backend.advertisement.index', compact('data', 'model', 'advertising_category_id', 'advertising_tag_id'));

    }


    public function update($id, Request $request)
    {
        // dd($request->all());

        $data = [


            'title' => $request->title,
            'description' => $request->description,
            'featured' => $request->featured ? $request->featured : 0,
            'advertising_category_id' => $request->advertising_category_id,


        ];

        if ($request->hasFile('file') || $request->hasFile('coverpic')) {

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $filename = $this->fileService->storeFile($file);
                $p = $file->move(base_path() . '/public/uploads/Advertising1/', $filename);
                $data['file'] = $filename;
            }

            if ($request->hasFile('coverpic')) {
                $coverPic = $request->file('coverpic');
                $coverPicName = $this->fileService->storeFile($coverPic);
                $p = $file->move(base_path() . '/public/uploads/Advertising1/cover-pics', $coverPicName);
                $data['coverpic'] = $coverPicName;
            }

            $this->model->find($id)->update($data);
        } else {

            $this->model->find($id)->update($request->all());


        }


        Session::flash('flash_success', 'The Advertising  Has Been Updated!.');
        Session::flash('flash_type', 'alert-warning');


        return redirect('admin/advertising');

    }


    public function delete($id)
    {

        $this->model->find($id)->delete();
        Session::flash('flash_danger', 'The Advertising  Has Been Deleted!.');
        Session::flash('flash_type', 'alert-warning');
        return redirect()->back();
    }


    public function advertisingpost()
    {
        $datas = AdvertisingCategory::all();

        $advertisingpost = Advertising::all();


        // dd($advertisingpost);
        return view('backend.advertisement.featured.index', compact('datas', 'advertisingpost'));

    }


    public function featurepostadvertising($id)
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


        // $confirmeddata=[
        //     'confirmed'=>1,
        // ];


        // $nowconfirmed=$this->model->find($id)->update($confirmeddata);

        // return 'done';
    }


}
