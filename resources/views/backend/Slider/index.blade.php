@section('before-styles')
<link rel="stylesheet" type="text/css" href="{{asset('public/css/select2.min.css')}}">
<script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
@endsection 


@extends('backend.layouts.app')
@section('content')


<div class="col-md-6">
@if(isset ($model))    
{{ Form::model($model, ['route' => ['admin.slider.update', $model], 'class' => 'form-horizontal', 'files'=> 'true', 'role' => 'form', 'method' => 'PATCH']) }}
@else
{{ Form::open(['route' => 'admin.slider.store', 'class' => 'form-horizontal', 'files'=> 'true', 'role' => 'form', 'method' => 'post']) }}
@endif

  <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
              slider
                </h3>


            </div>
            <div class="box-body">

            <div class="form-group">
                {{ Form::label('title','title', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('title', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the title']) }}
                </div><!--col-lg-10-->
                @if ($errors->has('title'))<p class="help-block">{{$errors->first('title')}}</p>@endif
            </div><!--form control-->

			
	       <div class="form-group">
                {{ Form::label('description','description', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('description', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the description']) }}
                </div><!--col-lg-10-->
                @if ($errors->has('description'))<p class="help-block">{{$errors->first('description')}}</p>@endif
            </div><!--form control-->


        <div class="form-group">
                {{ Form::label('order','order', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('order', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the order']) }}
                </div><!--col-lg-10-->
                @if ($errors->has('order'))<p class="help-block">{{$errors->first('order')}}</p>@endif
            </div><!--form control-->







            <div class="form-group">
                {{ Form::label('status','status', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::select('status', ['0'=>'Draft','1'=>'Published'], ['class' => 'form-control', 'placeholder' =>'Enter the status']) }}
                </div><!--col-lg-10-->
                @if ($errors->has('status'))<p class="help-block">{{$errors->first('status')}}</p>@endif
            </div><!--form control-->




           



              

           <div class="form-group">
                {{ Form::label('image','image', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::file('image', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the image']) }}
                </div><!--col-lg-10-->
                @if ($errors->has('image'))<p class="help-block">{{$errors->first('image')}}</p>@endif
            </div><!--form control-->

           
             

            
           





           
        
    </div>
    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
                {{ link_to_route('admin.slider', trans('cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
            </div><!--pull-left-->

            <div class="pull-right">
                {{ Form::submit(trans('save'), ['class' => 'btn btn-success btn-xs']) }}
            </div><!--pull-right-->

            <div class="clearfix"></div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                <a href="{!! url('slider') !!}" class="btn btn-primary">add</a>
              slider
                </h3>


            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="users-table" class="table table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>sn</th>
                          
                            <th>title</th>
                            <th>description</th>
                            <th>order</th>
                            <th>status</th>
                            
                            <th>image</th>
                            
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
                                <td>{!! $field->description !!}</td>
                                <td>{!! $field->order !!}</td>                              
                                <td>{!! $field->status==0?"Draft":"Publish" !!}</td>                              
                                
                                <td><img src="{!! url('public/uploads/slider/'.$field->image)!!}" style="width:150px; height:150px;">
                                <td>
                                
                               
                               
                                
                                   
                                <td class="col-md-1"> 
                                {!! link_to_route('admin.slider.edit', '', array($field->id),
                                              array('class' => 'fa fa-pencil-square-o fa-fw')) !!}
                                    
                                </td>
                                 <td class="col-md-1"> 
                                  {!! link_to_route('admin.slider.delete', '', array($field->id),
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
@section('after-scripts')






<script src="{{asset('public/js/select2.min.js')}}" type="text/javascript" charset="utf-8"></script>

         <script>
             CKEDITOR.replace( 'editor1' );
              
                $('.select').select2();
           </script>
           @endsection