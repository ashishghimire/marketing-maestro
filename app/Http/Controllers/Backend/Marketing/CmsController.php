<?php

namespace App\Http\Controllers\Backend\Marketing;

use Illuminate\Http\Request;
use App\Models\Marketing\Cms;
use App\Http\Controllers\Controller;
use Session;

class CmsController extends Controller
{
    public $cms;

    public function __construct(Cms $cms)
    {
    	$this->cms=$cms;
    }

    public function index()
    {
    	$data['menu']=$this->cms->all();
    	return view('backend.Menu.index',$data);
    }

    public function create()
    {


    	$data['menu'] = false;
        $data['maincms'] = Cms::where('main_or_sub', 1)->pluck('title', 'id');
    	
    	return view('backend.Menu.create',$data);

    }

    public function store(Request $request)
    {

        $url = str_slug($request->title);
        	$data=[

            'title' => $request->title,
            'status' => $request->status,
            'main_or_sub' => $request->main_or_sub,
            'parent_id' => $request->main_or_sub ? 0 : $request->parent_id,
            'url' => $url,
            'content' => $request->content,
            'position' => $request->position,
            'top_menu' => $request->top_menu,
            ];

    	$this->cms->create($data);


         	/*return redirect()->back();*/
          return redirect()->action('Backend\Marketing\CmsController@index');

    }


    public function edit($id)
    {
    	 $data['menu'] = Cms::findOrFail($id);
        $data['maincms'] = Cms::where('main_or_sub', 1)->pluck('title', 'id');

        	return view('backend.Menu.edit',$data);


    }


    public function update($id ,Request $request)
    {

        $url = str_slug($request->title);

        $this->validate($request, [
            'title' => 'required|min:3|max:255|unique:cms,title,'. $id
        ]);

        $data=[
            'title' => $request->title,
            'status' => $request->status,
            'main_or_sub' => $request->main_or_sub,
            'parent_id' => $request->main_or_sub ? 0 : $request->parent_id,
            'url' => $url,
            'content' => $request->content,
            'position' => $request->position,
            'top_menu' => $request->top_menu,
            ];

        $this->cms->find($id)->update($data);

     

            Session::flash('flash_success', 'The Cms has been Updated!.');       
            Session::flash('flash_type', 'alert-success');


            /*return redirect()->back();*/
          return redirect()->action('Backend\Marketing\CmsController@index');
          
    }


       public function delete($id)
        {

            $this->cms->find($id)->delete();

          return redirect()->action('Backend\Marketing\CmsController@index');
             
        }





}
