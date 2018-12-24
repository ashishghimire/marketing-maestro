<?php

namespace App\Http\Controllers\Backend\Marketing;

use Illuminate\Http\Request;
use App\Models\Marketing\Post;
use App\Models\Marketing\Category;
use App\Models\Marketing\Tag;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public $model;
   public $category;
   public $tag;
        
        

        public function __construct(Post $model, Category $category ,Tag $tag)
        {

            $this->model = $model;
            $this->category = $category;
            $this->tag = $tag;
           
            
        }


        public function index(Post $model)
        {

            $data = $this->model->paginate(4);
            


            return view('backend.post.index' , compact('data','category_id'));


        }


        public function create()
        {

            $category_id=$this->category->pluck('title','id');
           
            $tags=Tag::pluck('name','id');

            return view('backend.post.create',compact('category_id','tags'));
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
            $p = $file-> move( base_path() . '/public/uploads/Post/' , $filename );
           
            $data = [
                
                'title' => $request->title,
                'description' => $request->description,
                'slug' => $request->slug,
                'status' => $request->status,
                'image'      => $filename,
                'category_id'=>$request->category_id,
                
            ];
          
            $latest=$this->model->create($data);
        $latest->tags()->sync($request->tags,false);

            }

             else{

        $latest=$this->model->create($request->all());
        $latest->tags()->sync($request->tags,false);



        }




        
      
        return redirect()->back();
    }


           

//         public function edit($id)
//         {

//             $model = $this->model->find($id);
//             $data = $this->model->paginate(4);
//             $category_id= $this->category->pluck('title','id');
            

//             return view('backend.post.index' , compact('data','model','category_id'));
        
// }

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
                base_path() . '/public/uploads/Post/' , $filename
            );

            
           $data = [
                
              
                'title' => $request->title,
                'description' => $request->description,
                'slug' => $request->slug,
                'file'      => $filename,
                'category_id'=>$request->category_id,


                
            ];

          $this->model->find($id)->update($data);
      }
      else
      {

           $data = [
                
              
                'title' => $request->title,
                'description' => $request->description,
                'slug' => $request->slug,
                'category_id'=>$request->category_id,
                'tags'=>json_encode($tagdata),


                
            ];
        

           $this->model->find($id)->update($data);
        }
        
        

             return redirect('admin/Post');
           
        }


        public function delete($id)
        {

            $this->model->find($id)->delete();
             return redirect()->back();
        }
    
        public function Postapi() {

        $data = $this->model->paginate(8);
        return json_encode($data);
    }
}
