<?php

namespace App\Http\Controllers\Backend\Marketing;

use Illuminate\Http\Request;
use App\Models\Marketing\Article;
use App\Models\Marketing\ArticleCategory;
use App\Models\Marketing\Tag;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Response;

class ArticleController extends Controller
{
     public $model;
   public $articlecategory;
        
        

        public function __construct(Article $model, ArticleCategory $articlecategory )
        {

            $this->model = $model;
            $this->articlecategory = $articlecategory;
           
            
        }


        public function index(Article $model)
        {
                

            $data = $this->model->paginate(4);


            $article_category_id= $this->articlecategory->pluck('title','id');
            $article_tag_id=Tag::where('type','article')->get();
            
            


            return view('backend.Article.index' , compact('data','article_category_id','article_tag_id'));

        }


        public function create()
        {

            return view('backend.Article.create');
        }

     		



        public function store(Request $request)
        {
            // dd($request->all());

            $slug =str_slug($request->title);
             $this->validate($request,array(

                'title'=>'required',
                'description'=>'required',
                'file'=>'required',
                'file'=>'required|mimes:jpg,jpeg,png,gif,svg,bmp | max:1000',

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
            $p = $file-> move( base_path() . '/public/uploads/Article/' , $filename );
           
            $data = [
                
                 
                'title' => $request->title,
                'description' => $request->description,
                'featured' => $request->featured ? $request->featured : 0,
                'slug' => $request->slug,
                'file'      => $filename,
                'article_category_id'=>$request->article_category_id,
                'slug'=>$slug,
                
                
            ];
          
            $latest=$this->model->create($data);
            }

        else{

            $this->model->create($request->all());


        }


 Session::flash('flash_info' , 'The Article  Has Been Created!.');
            Session::flash('flash_type' , 'alert-warning');
        
      
        return redirect()->back();


            
        }


        public function edit($id)
        {

            $model = $this->model->find($id);
            $data = $this->model->paginate(4);
            $article_category_id= $this->articlecategory->pluck('title','id');
            

            return view('backend.Article.index' , compact('data','model','article_category_id'));
        
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
                base_path() . '/public/uploads/Article/' , $filename
            );
            
           $data = [
                
              
                  
                'title' => $request->title,
                'description' => $request->description,
                'featured' => $request->featured ? $request->featured : 0,
                'slug' => $request->slug,
                'file'      => $filename,
                'article_category_id'=>$request->article_category_id,
                

                
            ];

          $this->model->find($id)->update($data);
      }
      else
      {
        

           $this->model->find($id)->update($request->all());
        }
        
         Session::flash('flash_info' , 'The Article  Has Been Updated!.');
            Session::flash('flash_type' , 'alert-warning');

             return redirect('admin/article');
           
        }




         public function articlepost()
        {

            $datas=ArticleCategory::all();
            
         
            $articlepost=Article::all();



             // dd($articlepost);
            return view('backend.Article.featured.index',compact('datas','articlepost'));

        }




        public function featurepostarticle($id)
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
        

                // $confirmeddata=[
                //     'confirmed'=>1,
                // ];


                // $nowconfirmed=$this->model->find($id)->update($confirmeddata);

                // return 'done';
        }
    













        public function delete($id)
        {


            
            $data=$this->model->findOrfail($id);
            $path='public/uploads/Article/';

            if(is_file($path.$data->file)){
                unlink($path.$data->file);
            }
            $data->delete();        
            Session::flash('flash_Warning' , 'The File  Has Been Delketed!.');
            Session::flash('flash_type' , 'alert-warning');
             return redirect()->back();

        }
    
        
}
