
@extends('backend.layouts.app')
@section('before-styles')
<link rel="stylesheet" type="text/css" href="{{asset('public/css/select2.min.css')}}">

@endsection
@section('content')


<div class="col-md-12">
@if(isset ($model))    
{{ Form::model($model, ['route' => ['admin.article.update', $model], 'class' => 'form-horizontal', 'files'=> 'true', 'role' => 'form', 'method' => 'PATCH']) }}
@else
{{ Form::open(['route' => 'admin.article.store', 'class' => 'form-horizontal', 'files'=> 'true', 'role' => 'form', 'method' => 'post']) }}
@endif

  <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
              Article

                </h3>


            </div>
            <div class="box-body">

            <div class="form-group">
                {{ Form::label('title','Title', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-8 @if($errors->has('title')) has-error @endif">
                    {{ Form::text('title', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the title']) }}
                     @if ($errors->has('title')) <p class="help-block">{{ $errors->first('title') }}</p> @endif
                     <p class="well text-danger">*Note:-Please enter the title</p>
                </div>

            </div>

             {{-- <div class="form-group">
                {{ Form::label('file','Image', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10 @if($errors->has('file')) has-error @endif">
                    {{ Form::file('file', NULL, ['class' => 'form-control-file', 'placeholder' =>'Enter the file']) }}
                     @if ($errors->has('file')) <p class="help-block">{{ $errors->first('file') }}</p> @endif
                     <p class="well text-danger">*Note:-Please select the File</p>

                </div>
            </div>


              --}}


               <div class="form-group">
                {{ Form::label('file','Image', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10 @if($errors->has('file')) has-error @endif">
                {{--     {{ Form::file('file', NULL, ['class' => 'form-control-file', 'placeholder' =>'Enter the file']) }} --}}
                    <input type="file" name="file" id="profile-img">
                    <img src="" id="profile-img-tag" width="200px" />
                     @if ($errors->has('file')) <p class="help-block">{{ $errors->first('file') }}</p> @endif
                     <p class="well text-danger">*Note:-Please select the File</p>

                </div>
            </div>

             

            
            
            



  


            
   <div class="form-group">
            <div class="col-lg-2 control-label">
                <label >Featured</label>
            </div>

            <div class="col-lg-10">

        {!! Form::checkbox('featured', 1 ) !!}
         <p class="well text-danger">*Note:-select the feature post or leave if not</p>
             </div>

    </div>





             <div class="form-group">
                {{ Form::label('Category','Category', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10 @if($errors->has('category')) has-error @endif">
                    {!! Form::select('article_category_id',$article_category_id,null,['class'=>'form-control']) !!}
                     @if ($errors->has('category')) <p class="help-block">{{ $errors->first('category') }}</p> @endif
                     <p class="well text-danger">*Note:-Please select the Category</p>


                </div>
            </div>




            <div class="form-group">
                {{ Form::label('description','Description', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10 @if($errors->has('description')) has-error @endif">

                    {{ Form::textarea('description', Request::old('description'), ['id'=>'editor1','class' => 'form-control', 'placeholder' => 'Enter description here']) }}
                     @if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif
                     <p class="well text-danger">*Note:-Please enter the Description</p>

                </div>
            </div>



    
        
 

           
        
    </div>
    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
                {{ link_to_route('admin.article', trans('cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
            </div><!--pull-left-->

            <div class="pull-right">
                {{ Form::submit(trans('save'), ['class' => 'btn btn-success btn-xs']) }}
            </div><!--pull-right-->

            <div class="clearfix"></div>
</div>
</div>
</div>
</div>
<div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                <a href="{!! url('admin/article') !!}" class="btn btn-primary">add</a>
              article

                </h3>


            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="users-table" class="table table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>sn</th>
                          
                            <th>title</th>
                           
                            <th>desc</th>
                          
                            <th>file</th>
                            <th>edit</th>
                            <th>delete</th>
                            
                            
                           
                           
                        </tr>
                        </thead>
                        <tbody>
                        <?php $index = 0;?>
                        @foreach($data as $field)
                            <tr>
                                <td>{!! ++$index !!}</td>
                                                                
                                <td>{!! $field->title !!}</td>
                               <td>{{ substr($field->description, 0,50)}} {{ strlen($field->description) > 50 ? "..." : ""}}</td>
                               

                                
                                <td><img src="{!! url('public/uploads/Article',$field->file) !!}" style="width:150px; height:150px;">
                                </td>
                               
                               
                                
                                   
                                <td class="col-md-1"> 
                                {!! link_to_route('admin.article.edit', '', array($field->id),
                                              array('class' => 'fa fa-pencil-square-o fa-fw')) !!}
                                    
                                </td>
                                 <td class="col-md-1"> 
                                  {!! link_to_route('admin.article.delete', '', array($field->id),
                                              array('class' => 'fa fa-trash-o fa-fw')) !!}
                                    
                                    

                                    {!! Form::close() !!}

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
{!!$data->render() !!}
                    </table>
                </div>
            </div>
        </div>
    </div>



    
  @stop



@section('before-scripts')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-img").change(function(){
        readURL(this);
    });
</script>
@endsection
